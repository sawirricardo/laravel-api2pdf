<?php

use Api2Pdf\Api2Pdf as Client;
use Sawirricardo\Laravel\Api2pdf\Api2pdf;

if (! function_exists('api2pdf')) {
    function api2pdf(): Client
    {
        return app(Api2pdf::class);
    }
}
