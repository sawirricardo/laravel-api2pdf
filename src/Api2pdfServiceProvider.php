<?php

namespace Sawirricardo\Api2pdf;

use Sawirricardo\Api2pdf\Commands\Api2pdfCommand;
use Sawirricardo\Laravel\Api2pdf\Api2pdf;
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
            ->hasConfigFile()
            ->hasCommand(Api2pdfCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->singleton(Api2pdf::class, function () {
            return new Api2pdf(config('api2pdf'));
        });
    }
}
