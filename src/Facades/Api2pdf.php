<?php

namespace Sawirricardo\laravel\Api2pdf\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\Api2pdf\Api2pdf
 */
class Api2pdf extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-api2pdf';
    }
}
