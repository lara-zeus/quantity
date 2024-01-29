<?php

namespace LaraZeus\Quantity\Facades;

use Illuminate\Support\Facades\Facade;

class Quantity extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'quantity';
    }
}
