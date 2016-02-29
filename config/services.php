<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'twilio' => [
        'sid' => 'ACf83931075e897ac7bcf266639f0309a9',
        'token' => '44881477a1d46187b32a7d2c55d79e63',
        'from' => '+16572014282',
        'ssl_verify' => true, // Development switch to bypass API SSL certificate verfication
    ],
    'facebook' => [
        'client_id' => '1116227988417733',
        'client_secret' => 'bc91d22d8076a3b49e0661eb07f26d48    ',
        'redirect' => 'http://wp.krishna.cs/lara_newadmin/public/',
    ],

];
