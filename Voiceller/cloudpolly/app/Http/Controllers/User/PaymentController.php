<?php

namespace App\Http\Controllers\User;

use App\Traits\InvoiceGeneratorTrait;
use App\Http\Controllers\Controller;
use App\Events\PaymentReferrerBonus;
use App\Services\PaymentPlatformResolverService;
use App\Events\PaymentProcessed;
use Illuminate\Http\Request;
use App\Models\PrepaidPlan;
use App\Models\PaymentPlatform;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\Plan;
use App\Models\User;


class PaymentController extends Controller
{   
    use InvoiceGeneratorTrait;

    protected $paymentPlatformResolver;

    
    public function __construct(PaymentPlatformResolverService $paymentPlatformResolver)
    {
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request, Plan $id)
    {
        $rules = [
            'payment_platform' => ['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);

        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);

        session()->put('subscriptionPlatformID', $request->payment_platform);
        session()->put('gatewayID', $request->payment_platform);
        
        return $paymentPlatform->handlePaymentSubscription($request, $id);
    }


    /**
     * Process prepaid plan request
     */
    public function payPrePaid(Request $request, PrepaidPlan $id)
    {
        $rules = [
            'payment_platform' => ['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);

        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);

        session()->put('paymentPlatformID', $request->payment_platform);
    
        return $paymentPlatform->handlePaymentPrePaid($request, $id);       
    }


    /**
     * Process approved prepaid plan requests
     */
    public function approved()
    {   
        if (session()->has('paymentPlatformID')) {
            $paymentPlatform = $this->paymentPlatformResolver->resolveService(session()->get('paymentPlatformID'));

            return $paymentPlatform->handleApproval();
        }

        return redirect()->back()->with('error', 'There was an error while retrieving payment gateway. Please try again');
    }


    /**
     * Process cancelled prepaid plan requests
     */
    public function cancelled()
    {
        return redirect()->route('user.subscriptions')->with('error', 'You cancelled the payment process. Would like to try again?');
    }


    /**
     * Process approved subscription plan requests
     */
    public function approvedSubscription(Request $request)
    {   
        $rules = [
            'plan_id' => ['required', 'exists:plans,id']
        ];

        $request->validate($rules);

        if (session()->has('subscriptionPlatformID')) {
            $paymentPlatform = $this->paymentPlatformResolver->resolveService(session()->get('subscriptionPlatformID'));

            if (session()->has('subscriptionID')) {
                $subscriptionID = session()->get('subscriptionID');
            }

            if ($paymentPlatform->validateSubscriptions($request)) {
                $plan = Plan::where('id', $request->plan_id)->firstOrFail();
                $user = $request->user();

                $gateway_id = session()->get('gatewayID');
                $gateway = PaymentPlatform::where('id', $gateway_id)->firstOrFail();

                $subscription = Subscription::create([
                    'active_until' => now()->addDays($plan->payment_frequency),
                    'user_id' => $user->id,
                    'plan_id' => $plan->id,
                    'status' => 'Active',
                    'created_at' => now(),
                    'gateway' => $gateway->name,
                    'characters' => $plan->characters,
                    'bonus'=> $plan->bonus,
                    'subscription_id' => $subscriptionID,
                ]);

                session()->forget('gatewayID');

                $this->registerSubscriptionPayment($plan, $user, $subscriptionID, $gateway->name);               
                $order_id = $subscriptionID;

                return view('user.balance.subscriptions.success', compact('plan', 'order_id'));
            }
        }

        return redirect()->back()->with('error', 'There was an error while checking your subscription. Please try again');
    }


    /**
     * Process cancelled subscription plan requests
     */
    public function cancelledSubscription()
    {
        return redirect()->route('user.subscriptions')->with('error', 'You cancelled the payment process. Would like to try again?');
    }


    /**
     * Register subscription payment in DB
     */
    private function registerSubscriptionPayment(Plan $plan, User $user, $subscriptionID, $gateway)
    {
        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $plan->cost * config('payment.payment_tax') / 100 : 0;
        $total_price = $tax_value + $plan->cost;

        if (config('payment.referral.payment.enabled') == 'on') {
            if (config('payment.referral.payment.policy') == 'first') {
                if (Payment::where('user_id', $user->id)->where('status', 'Success')->exists()) {
                    /** User already has at least 1 payment */
                } else {
                    event(new PaymentReferrerBonus(auth()->user(), $subscriptionID, $total_price, $gateway));
                }
            } else {
                event(new PaymentReferrerBonus(auth()->user(), $subscriptionID, $total_price, $gateway));
            }
        }

        $record_payment = new Payment();
        $record_payment->user_id = $user->id;
        $record_payment->plan_id = $plan->id;
        $record_payment->discount = 0;
        $record_payment->order_id = $subscriptionID;
        $record_payment->plan_type = $plan->plan_type;
        $record_payment->plan_name = $plan->plan_name;
        $record_payment->amount = $total_price;
        $record_payment->currency = $plan->currency;
        $record_payment->gateway = $gateway;
        $record_payment->status = 'Success';
        $record_payment->characters = $plan->characters + $plan->bonus;
        $record_payment->save();
        
        $group = ($user->hasRole('admin'))? 'admin' : 'subscriber';

        $total_chars = $user->available_chars + $plan->characters + $plan->bonus;
        $user = User::where('id', $user->id)->first();
        $user->syncRoles($group);    
        $user->group = $group;
        $user->plan_id = $plan->id;
        $user->available_chars = $total_chars;
        $user->save();       

        event(new PaymentProcessed(auth()->user()));
   
    }   
    
    
    /**
     * Generate Invoice after payment
     */
    public function generatePaymentInvoice($order_id)
    {      
        $promocode = (session()->has('user_promocode')) ? session()->get('user_promocode') : false;
        
        $this->generateInvoice($order_id, $promocode);
    }


    /**
     * Bank Transfer Invoice
     */
    public function bankTransferPaymentInvoice($order_id)
    {
        $this->bankTransferInvoice($order_id);
    }


    /**
     * Show invoice for past payments
     */
    public function showPaymentInvoice(Payment $id)
    {   
        if ($id->gateway == 'BankTransfer' && $id->status != 'Success') {
            $this->bankTransferInvoice($id->order_id);
        } else {          
            $this->showInvoice($id);
        }
    }


    /**
     * Cancel active subscription
     */
    public function stopSubscription(Subscription $id)
    {   
        if ($id->status == 'Cancelled') {
            return redirect()->back()->with('success', 'This subscription is already cancelled');
        } elseif ($id->status == 'Suspended') {
            return redirect()->back()->with('error', 'Subscription has been suspended due to failed renewal payment');
        } elseif ($id->status == 'Expired') {
            return redirect()->back()->with('error', 'Subscription has been expired, please create a new one');
        }
        
        $platformID = ($id->gateway == 'Stripe') ? 2 : 1;

        if ($id->gateway != 'BankTransfer') {
            $paymentPlatform = $this->paymentPlatformResolver->resolveService($platformID);

            $status = $paymentPlatform->stopSubscription($id->subscription_id);

            if ($platformID == 2) {
                if ($status->cancel_at) {
                    $id->update(['status'=>'Cancelled']);
                    $user = User::where('id', $id->user_id)->firstOrFail();
                    $user->update(['plan_id' => null]);
                }
            } else {
                if (is_null($status)) {
                    $id->update(['status'=>'Cancelled']);
                    $user = User::where('id', $id->user_id)->firstOrFail();
                    $user->update(['plan_id' => null]);
                }
            }
        } else {
            $id->update(['status'=>'Cancelled']);
            $user = User::where('id', $id->user_id)->firstOrFail();
            $user->update(['plan_id' => null]);
        }

        
        

        return redirect()->back()->with('success', 'Your subscription has been successfully cancelled');
        
    }

}
