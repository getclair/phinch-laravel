<?php

namespace Phinch;

use Illuminate\Support\Facades\Facade as FacadeAlias;
use Phinch\Finch\Finch;

class Facade extends FacadeAlias
{
    /**
     * @method static void using($name): void
     * @method static void reset(): void
     * @method static void getSpec(): string|null
     * @method static void resolve(): SpecObjectInterface
     *
     * @see \Phinch\RequestFactory
     */
    protected static function getFacadeAccessor()
    {
        return Finch::class;
    }
}
