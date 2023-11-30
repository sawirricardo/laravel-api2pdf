<?php

namespace Blackpig\Api2pdf\Laravel\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Blackpig\Api2pdf\Laravel\Api2pdfServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            Api2pdfServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-api2pdf_table.php.stub';
        $migration->up();
        */
    }
}
