<?php

return [
    'client_id' => env('PAYPAL_CLIENT_ID', ''),
    'secrent' => env('PAYPAL_SECRET', ''),
    'settings' => array(
        'mode' => env('PAYPAL_MODE', 'sandbox'),
        'http.ConnectionTimeout' => 30,
        'log.LogEnable' => true,
        'log.FileName' => storage_path(). '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];