<?php

namespace AsLong\Order\Facades;

use Illuminate\Support\Facades\Facade;

class Refunds extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AsLong\Order\Refunds::class;
    }
}
