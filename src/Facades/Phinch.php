<?php

namespace Phinch\Phinch\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;
use Phinch\PhinchClient;

/**
 * @method static authorize(string $token)
 * @method static PhinchClient client()
 * @method \Phinch\Products\Company company()
 * @method \Phinch\Products\Directory directory()
 * @method \Phinch\Products\Employment employment()
 * @method \Phinch\Products\Individual individual()
 * @method \Phinch\Products\Payment payment()
 * @method \Phinch\Products\PayStatement payStatement()
 * @method \Phinch\Products\Company $company
 * @method \Phinch\Products\Directory $directory
 * @method \Phinch\Products\Employment $employment
 * @method \Phinch\Products\Individual $individual
 * @method \Phinch\Products\Payment $payment
 * @method \Phinch\Products\PayStatement $payStatement
 */
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
