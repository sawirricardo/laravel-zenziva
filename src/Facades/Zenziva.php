<?php

namespace Sawirricardo\Zenziva\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\Zenziva\Zenziva
 */
class Zenziva extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-zenziva';
    }
}
