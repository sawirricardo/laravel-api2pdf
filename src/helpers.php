<?php

use Sawirricardo\Api2pdf\Laravel\Api2pdf;

if (! function_exists('api2pdf')) {
    function api2pdf(): Api2pdf
    {
        return app(Api2pdf::class);
    }
}
