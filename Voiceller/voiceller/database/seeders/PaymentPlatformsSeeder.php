<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentPlatform;

class PaymentPlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platforms = [
            ['id' => 1, 'name' => 'PayPal', 'image' => 'img/payments/paypal.svg', 'enabled' => false, 'subscriptions_enabled' => false],
            ['id' => 2, 'name' => 'Stripe', 'image' => 'img/payments/stripe.svg', 'enabled' => false, 'subscriptions_enabled' => false],
            ['id' => 3, 'name' => 'BankTransfer', 'image' => 'img/payments/bank-transfer.png', 'enabled' => false, 'subscriptions_enabled' => false],
        ];

        foreach ($platforms as $platform) {
            PaymentPlatform::updateOrCreate(['id' => $platform['id']], $platform);
        }
    }
}
