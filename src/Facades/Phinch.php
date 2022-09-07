<?php

namespace Phinch\Phinch\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;
use Phinch\PhinchClient;

/**
 * @method static authorize(string $token)
 * @method static PhinchClient client()
 * @property \Phinch\Products\Company $company
 * @property \Phinch\Products\Directory $directory
 * @property \Phinch\Products\Employment $employment
 * @property \Phinch\Products\Individual $individual
 * @property \Phinch\Products\Payment $payment
 * @property \Phinch\Products\PayStatement $payStatement
 */
class Phinch extends BaseFacade
{
    /**
     *
     * @see \Phinch\Phinch
     */
    protected static function getFacadeAccessor()
    {
        return 'phinch';
    }
}
