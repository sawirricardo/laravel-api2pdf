<?php

namespace Sawirricardo\Laravel\Api2pdf;

use Api2Pdf\Api2Pdf as Client;

class Api2pdf
{
    /**
     * @return Client
     */
    public function __construct(array $config)
    {
        return new Client($config['api_key']);
    }
}
