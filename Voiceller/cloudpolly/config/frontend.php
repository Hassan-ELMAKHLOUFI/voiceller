<?php

return [

    /*
    |--------------------------------------------------------------------------
    | General Settings
    |--------------------------------------------------------------------------
    */

    'maintenance' => env('FRONTEND_MAINTENANCE_MODE'),

    'frontend_page' => env('FRONTEND_FRONTEND_PAGE'),

    'about_page' => env('FRONTEND_ABOUT_PAGE'),

    'voices_page' => env('FRONTEND_VOICES_PAGE'),

    'blog_page' => env('FRONTEND_BLOG_PAGE'),

    'pricing_page' => env('FRONTEND_PRICING_PAGE'),

    'contact_page' => env('FRONTEND_CONTACT_PAGE'),

    'synthesize' => [
        'status' => env('FRONTEND_LIVE_SYNTHESIZE'),
        'max_chars' => env('FRONTEND_MAX_CHAR_LIMIT'),
        'neural' => env('FRONTEND_NEURAL_VOICES', 'disable'),
    ], 

    'social_twitter' => env('FRONTEND_SOCIAL_TWITTER'),
    'social_facebook' => env('FRONTEND_SOCIAL_FACEBOOK'),
    'social_linkedin' => env('FRONTEND_SOCIAL_LINKEDIN'),
    'social_instagram' => env('FRONTEND_SOCIAL_INSTAGRAM'),
    'social_google' => env('FRONTEND_SOCIAL_GOOGLE'),
    'social_youtube' => env('FRONTEND_SOCIAL_YOUTUBE'),
    'social_vimeo' => env('FRONTEND_SOCIAL_VIMEO'),
    'social_flickr' => env('FRONTEND_SOCIAL_FLICKR'),

];
