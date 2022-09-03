<?php

namespace Phinch\Phinch\Facades;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade as BaseFacade;

class Connect extends BaseFacade
{
    /**
     * @method static string redirectUrl()
     * @method static string exchange($code)
     * @method static \Phinch\Connect\Connect products(array $products)
     * @method static \Phinch\Connect\Connect state(mixed $value)
     * @method static \Phinch\Connect\Connect payrollProvider(string $provider)
     * @method static \Phinch\Connect\Connect inSandbox()
     *
     * @see \Phinch\Connect\Connect
     */
    protected static function getFacadeAccessor()
    {
        return 'phinch.connect';
    }

    /**
     * @return RedirectResponse
     */
    public static function redirect(): RedirectResponse
    {
        $instance = static::getFacadeRoot();

        return new RedirectResponse($instance->redirectUrl());
    }

    /**
     * @return string
     * @throws BindingResolutionException
     */
    public static function token(): string
    {
        $instance = static::getFacadeRoot();

        return $instance->exchange(
            static::$app->make('request')->input('code')
        );
    }
}
