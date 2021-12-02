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

    'google' => [
        'client_id'     => '294738725931-nhu0c4gjqj96i076rrrjp3u58qq7t72o.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect'      => 'http://127.0.0.1:8007/callback/google',
    ],


    'github' => [
        'client_id'     => 'd29846cda52e48661494',
        'client_secret' => '3fe841cf4af49b9a0ca631724de5a7aa59bd6a0c',
        'redirect'      => 'http://127.0.0.1:8007/callback/github',
    ],


];
