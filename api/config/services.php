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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'coolpay' => [
        'boosts' => env('COOLPAY_BOOSTS_PUBLIC_KEY', '058196db-98d7-4fc2-9988-82e2e14b2b8e'),
        'credits' => env('COOLPAY_CREDITS_PUBLIC_KEY', '929cc610-94ba-40ff-9970-56e1f6e891ac'),
        'plans' => env('COOLPAY_PLANS_PUBLIC_KEY', 'e2743f08-469a-4945-ae2b-d5a724ec75ae'),
    ],

];
