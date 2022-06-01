<?php

use Sawirricardo\Api2pdf\Laravel\Api2pdf as Client;
use Sawirricardo\Api2pdf\Laravel\Facades\Api2pdf;

if (! function_exists('api2pdf')) {
    function api2pdf(): Client
    {
        return app(Api2pdf::class)::new();
    }
}
