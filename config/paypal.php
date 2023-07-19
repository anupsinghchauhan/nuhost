<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID'),
        'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET'),
        // /'app_id'            => 'ST6LPJFY8X6RC',
    ],
    'live' => [
        'client_id'         => env('PAYPAL_LIVE_CLIENT_ID'),
        'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET'),
        //'app_id'            => env('PAYPAL_LIVE_APP_ID', 'DebitCCPay'),
    ],

    'payment_action' => env('PAYPAL_PAYMENT_ACTION'),
    'currency'       => env('PAYPAL_CURRENCY'),
    'notify_url'     => env('PAYPAL_NOTIFY_URL'),
    'locale'         => env('PAYPAL_LOCALE'),
    'validate_ssl'   => env('PAYPAL_VALIDATE_SSL'),
];
