<?php

namespace Phinch\Phinch;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Phinch\Connect\Connect;
use Phinch\Phinch;

class ConnectFactory
{
    /**
     * @param array $config
     * @param array $products
     * @param bool $sandbox
     * @return Connect
     */
    public static function make(array $config, array $products = [], bool $sandbox = false): Connect
    {
        if (!Str::startsWith($redirect = $config['connect_redirect'], 'http')) {
            $redirect = URL::to($redirect);
        }

        $connect = new Connect(
            $config['client_id'],
            $config['client_secret'],
            $redirect,
        );

        $connect->products($products);

        if ($sandbox) {
            $connect->inSandbox();
        }

        return $connect;
    }

}