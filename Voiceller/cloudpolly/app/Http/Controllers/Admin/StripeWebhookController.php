<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class StripeWebhookController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new LicenseController();
    }

    /**
     * Stripe Webhook processing, unless you are familiar with 
     * Stripe's PHP API, we recommend not to modify it
     */
    public function handleStripe(Request $request)
    {
        $verify = $this->api->verify_license();

        if($verify['status']!=false){
            die('Your license is invalid or not activated, please contact support.');
        }

        \Stripe\Stripe::setApiKey(config('services.stripe.client_id'));

        $endpoint_secret = config('services.stripe.webhook_secret');

       
        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;


        try {

            $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $endpoint_secret);

        } catch(\UnexpectedValueException $e) {
            
            exit();

        } catch(\Stripe\Exception\SignatureVerificationException $e) {

            exit();

        }


        switch ($event->type) {
            case 'customer.subscription.deleted': 
                $subscription = Subscription::where('subscription_id', $event->data->object->id)->firstOrFail();
                $subscription->update(['status'=>'Cancelled']);
                
                $user = User::where('id', $subscription->user_id)->firstOrFail();
                $user->update(['plan_id' => null]);
           
                break;
            case 'invoice.payment_failed':
                $subscription = Subscription::where('subscription_id', $event->data->object->id)->firstOrFail();
                $subscription->update(['status'=>'Suspended']);
                
                $user = User::where('id', $subscription->user_id)->firstOrFail();
                $user->update(['plan_id' => null]);
          
                break;
        }
    }
}
