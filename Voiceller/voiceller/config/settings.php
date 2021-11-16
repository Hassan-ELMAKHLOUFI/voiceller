<?php

return [

    /*
    |--------------------------------------------------------------------------
    | General Settings
    |--------------------------------------------------------------------------
    */

    'registration' => env('GENERAL_SETTINGS_REGISTRATION'),

    'email_verification' => env('GENERAL_SETTINGS_EMAIL_VERIFICATION'),

    'oauth_login' => env('GENERAL_SETTINGS_OAUTH_LOGIN'),

    'envato' => [
        'activation' => env('GENERAL_SETTINGS_ENVATO_ACTIVATION'),
        'username' => env('GENERAL_SETTINGS_ENVATO_USERNAME'),
    ],

    'default_user' => env('GENERAL_SETTINGS_DEFAULT_USER_GROUP'),

];
