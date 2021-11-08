<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Cloud Text-to-Speech Vendors
    |--------------------------------------------------------------------------
    */

    'aws' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION'),
        'bucket' => env('AWS_BUCKET'),
        'folder' => env('AWS_FOLDER'),
        'storage' => env('AWS_KEY_STORAGE_TYPE'),
    ],

    'azure' => [
        'key' => env('AZURE_SUBSCRIPTION_KEY'),
        'region' => env('AZURE_DEFAULT_REGION'),
    ],

    'gcp' => [
        'key_path' => env('GOOGLE_APPLICATION_CREDENTIALS'),
    ],

    'ibm' => [
        'api_key' => env('IBM_API_KEY'),
        'endpoint_url' => env('IBM_ENDPOINT_URL'),
    ],

    'wasabi' => [
        'key' => env('WASABI_ACCESS_KEY_ID'),
        'secret' => env('WASABI_SECRET_ACCESS_KEY'),
        'region' => env('WASABI_DEFAULT_REGION'),
        'bucket' => env('WASABI_BUCKET'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Social Media Vendors for OAuth Login
    |--------------------------------------------------------------------------
    */

    'twitter' => [
        'enable' => env('CONFIG_ENABLE_LOGIN_TWITTER'),
        'client_id' => env('TWITTER_API_KEY'),
        'client_secret' => env('TWITTER_API_SECRET'),
        'redirect' => env('TWITTER_REDIRECT'),
    ],

    'linkedin' => [
        'enable' => env('CONFIG_ENABLE_LOGIN_LINKEDIN'),
        'client_id' => env('LINKEDIN_API_KEY'),
        'client_secret' => env('LINKEDIN_API_SECRET'),
        'redirect' => env('LINKEDIN_REDIRECT'),
    ],

    'google' => [
        'enable' => env('CONFIG_ENABLE_LOGIN_GOOGLE'),
        'client_id' => env('GOOGLE_API_KEY'),
        'client_secret' => env('GOOGLE_API_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT'),
        /* Google reCaptcha Keys */
        'recaptcha' => [
            'enable' => env('GOOGLE_RECAPTCHA_ENABLE'),
            'site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY'),
            'secret_key' => env('GOOGLE_RECAPTCHA_SECRET_KEY'),
        ],  
        /* Google Maps API Key */
        'maps' => [
            'enable' => env('GOOGLE_MAPS_ENABLE'),
            'key' => env('GOOGLE_MAPS_KEY'),   
        ],   
        /* Google Analytics Tracking ID */
        'analytics' => [
            'enable' => env('GOOGLE_ANALYTICS_ENABLE'),
            'id' => env('GOOGLE_ANALYTICS_ID'),   
        ],
    ],

    'facebook' => [
        'enable' => env('CONFIG_ENABLE_LOGIN_FACEBOOK'),
        'client_id' => env('FACEBOOK_API_KEY'),
        'client_secret' => env('FACEBOOK_API_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Payment Gateways
    |--------------------------------------------------------------------------
    */

    'stripe' => [
        'enable' => env('STRIPE_ENABLED'),
        'subscription_enable' => env('STRIPE_SUBSCRIPTION_ENABLED'),
        'base_uri' => env('STRIPE_BASE_URI'),
        'webhook_uri' => env('STRIPE_WEBHOOK_URI'),
        'webhook_secret' => env('STRIPE_WEBHOOK_SECRET'),
        'api_key' => env('STRIPE_KEY'),
        'api_secret' => env('STRIPE_SECRET'),
        'class' => App\Services\StripeService::class,
    ],

    'paypal' => [
        'enable' => env('PAYPAL_ENABLED'),
        'subscription_enable' => env('PAYPAL_SUBSCRIPTION_ENABLED'),
        'base_uri' => env('PAYPAL_BASE_URI'),
        'webhook_uri' => env('PAYPAL_WEBHOOK_URI'),
        'webhook_id' => env('PAYPAL_WEBHOOK_ID'),
        'client_id' => env('PAYPAL_CLIENT_ID'),
        'client_secret' => env('PAYPAL_CLIENT_SECRET'),
        'class' => App\Services\PayPalService::class,
    ],

    'banktransfer' => [
        'prepaid' => env('BANK_TRANSFER_PREPAID'),
        'subscription' => env('BANK_TRANSFER_SUBSCRIPTION'),
        'class' => App\Services\BankTransferService::class,
    ],




];
