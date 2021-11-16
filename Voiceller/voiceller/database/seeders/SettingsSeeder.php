<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'name' => 'referral_headline',
                'value' => 'Invite your friends to CloudPolly, if they sign up, you will get 1000 extra credits and you will also get 50% commission of thier first purchase.'
            ],
            [
                'name' => 'referral_guideline',
                'value' => '1. Share your referral link with your friends to register
                            2. After they successfully register and verify their emails you will get 1000 free TTS bonus credits for each friend
                            3. For their first purchase on CloudPolly, you will receive 50% of commissions
                            4. Include your Bank Requisites or Paypal ID in My Gateway tab to receive your commissions
                            5. Request payouts under My Payouts tab or use your balance to purchase TTS credits
                            6. Checkout all your referrals under My Referrals tab'
            ],
            [
                'name' => 'bank_instructions',
                'value' => 'Make your payment directly into our bank account. Please use your Order ID Number as the payment reference. Text to Speech Credits will not be allocated to your account until the funds have cleared in our bank account. Thank you.'
            ],
            [
                'name' => 'bank_requisites',
                'value' => 'Bank Name: 
                            Account Name:
                            Account Number/IBAN:
                            BIC/Swift:
                            Routing Number:'
            ],
        ];


        foreach ($settings as $setting) {
            Setting::updateOrCreate(['name' => $setting['name']], $setting);
        }
    }
}
