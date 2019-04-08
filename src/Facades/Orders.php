<?php

namespace AsLong\Order\Facades;

use Illuminate\Support\Facades\Facade;

class Orders extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsLong\Order\Orders::class;
    }
}
