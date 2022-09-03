<?php

namespace Phinch\Phinch\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Phinch extends BaseFacade
{
    /**
     * @method array providers()
     * @method array introspect(string $token)
     * @method array disconnect(string $token)
     *
     * @see \Phinch\Phinch
     */
    protected static function getFacadeAccessor()
    {
        return 'phinch';
    }
}
