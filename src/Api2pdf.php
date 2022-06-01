<?php

namespace Sawirricardo\Api2pdf\Laravel;

use Api2Pdf\Api2Pdf as Client;

class Api2pdf
{
    private Client $client;

    public function __construct(array $config)
    {
        $this->client = new Client($config['api_key']);
    }

    public function client(): Client
    {
        return $this->client;
    }

    public function new(): static
    {
        return $this;
    }
}
