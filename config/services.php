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

    // 'mailtrap' => [
    //     'key'       => '36ae5f594f64a8d4ca824ea28e11e7cf',
    //     'token'     => 'eyJhbGciOiJIUzUxMiJ9.eyJkYXRhIjp7InRva2VuIjoiMzZhZTVmNTk0ZjY0YThkNGNhODI0ZWEyOGUxMWU3Y2YifX0.HDNJFcHM6CgrmB_IqzRwl8owb6xFND2By1oKLAiO1PdZu80Yx_JRo6auHc6DmeaDCXXJVKzNDNBlwJ5dYuJIcg',

];
