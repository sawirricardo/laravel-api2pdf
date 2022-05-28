<?php

namespace Sawirricardo\Api2pdf\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\Api2pdf\Laravel\Api2pdf
 */
class Api2pdf extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-api2pdf';
    }
}
