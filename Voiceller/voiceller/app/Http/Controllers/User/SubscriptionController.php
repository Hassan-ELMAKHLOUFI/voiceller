<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Support\Str;
use App\Models\PaymentPlatform;
use App\Models\PrepaidPlan;
use App\Models\Setting;
use App\Models\Plan;

class SubscriptionController extends Controller
{   
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Plan::count();

        $prepaid_exists = PrepaidPlan::count();

        $subscriptions = Plan::where('plan_type', 'subscription')
                             ->where('status', 'active')->get();
        $prepaids = PrepaidPlan::where('plan_type', 'prepaid')
                        ->where('status', 'active')->get();

        return view('user.balance.subscriptions.index', compact('plan', 'prepaid_exists', 'subscriptions', 'prepaids'));
    }


    /**
     * Checkout for Pre Paid plans only.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkout(PrepaidPlan $id)
    {   
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        $payment_platforms = PaymentPlatform::where('enabled', 1)->get();
        
        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->cost * config('payment.payment_tax') / 100 : 0;

        $total_value = $tax_value + $id->cost;
        $currency = $id->currency;

        $bank_information = ['bank_instructions', 'bank_requisites'];
        $bank = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $bank_information)) {
                $bank[$row['name']] = $row['value'];
            }
        }

        $bank_order_id = 'BT-' . strtoupper(Str::random(15));
        session()->put('bank_order_id', $bank_order_id);
        
        return view('user.balance.subscriptions.prepaid-checkout', compact('id', 'payment_platforms', 'tax_value', 'total_value', 'currency', 'bank', 'bank_order_id'));
    }


    /**
     * Checkout for Subscription plans only.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Plan $id)
    {   
         $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }
        
        $payment_platforms = PaymentPlatform::where('subscriptions_enabled', 1)->get();

        $tax_value = (config('payment.payment_tax') > 0) ? $tax = $id->cost * config('payment.payment_tax') / 100 : 0;

        $total_value = $tax_value + $id->cost;
        $currency = $id->currency;
        $gateway_plan_id = $id->gateway_plan_id;

        $bank_information = ['bank_instructions', 'bank_requisites'];
        $bank = [];
        $settings = Setting::all();

        foreach ($settings as $row) {
            if (in_array($row['name'], $bank_information)) {
                $bank[$row['name']] = $row['value'];
            }
        }

        $bank_order_id = 'BT-' . strtoupper(Str::random(15));
        session()->put('bank_order_id', $bank_order_id);

        return view('user.balance.subscriptions.subscribe-checkout', compact('id', 'payment_platforms', 'tax_value', 'total_value', 'currency', 'gateway_plan_id', 'bank', 'bank_order_id'));
    } 
}
