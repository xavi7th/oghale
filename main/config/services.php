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

  'ses' => [
    'key' => env('AWS_ACCESS_KEY_ID'),
    'secret' => env('AWS_SECRET_ACCESS_KEY'),
    'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
  ],
  'twilio' => [
    'username' => env('TWILIO_USERNAME'), // optional when using auth token
    'password' => env('TWILIO_PASSWORD'), // optional when using auth token
    'auth_token' => env('TWILIO_AUTH_TOKEN'), // optional when using username and password
    'account_sid' => env('TWILIO_ACCOUNT_SID'),
    'from' => env('TWILIO_FROM'), // optional
  ],
  'telegram' => [
    'office_number' => env('TELEGRAM_OFFICE_NUMBER_CHAT_ID', null),
    'error_alert_group' => env('TELEGRAM_ERROR_ALERT_CHAT_ID', null),
    'admin_notifications_group' => env('TELEGRAM_ADMIN_NOTIFICATIONS_CHAT_ID', null),
    'bot_id' => env('TELEGRAM_ADMIN_BOT_ID', null),
  ]

];
