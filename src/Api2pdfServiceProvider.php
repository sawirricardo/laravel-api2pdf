<?php

namespace Sawirricardo\Api2pdf\Laravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class Api2pdfServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-api2pdf')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->singleton('laravel-api2pdf', function () {
            return new Api2pdf(config('api2pdf'));
        });
    }
}
