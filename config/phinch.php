<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Products
    |--------------------------------------------------------------------------
    |
    | Here you may specify the products your app needs access to.
    | All options are found in the Finch documentation:
    | https://developer.tryfinch.com/docs/reference/ZG9jOjMxOTg1NTI3-permissions
    |
    */

    'products' => [
        'company',
        'directory',
        'individual',
        'employment',
        'payment',
        'pay_statement',
//        'benefits',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default API Version
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default API version to use.
    |
    */

    'api_version' => env('FINCH_API_VERSION', '2020-09-17'),

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | Here you may specify if the app is in Sandbox mode.
    |
    */

    'sandbox' => env('FINCH_SANDBOX_MODE', false),

];
