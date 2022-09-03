<?php

return [

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
