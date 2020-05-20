<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'exchange-api' => [
        'default' => 'exchange_rates',

        'fixer' => [
            'key' => env('fixer_api_key'),
            'class' => 'Webkul\Core\Helpers\Exchange\FixerExchange'
        ],

        'exchange_rates' => [
            'class' => 'Webkul\Core\Helpers\Exchange\ExchangeRates'
        ],
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('204820753930964'),
        'client_secret' => env('98829ccc6397841f479511dcf4421a6a'),
        'redirect' => 'http://voileva.test/auth/facebook/callback',
    ]
];
