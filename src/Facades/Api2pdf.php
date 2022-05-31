<?php

namespace Sawirricardo\Api2pdf\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Api2Pdf\Api2Pdf client()
 * @see \Sawirricardo\Api2pdf\Laravel\Api2pdf
 */
class Api2pdf extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-api2pdf';
    }
}
