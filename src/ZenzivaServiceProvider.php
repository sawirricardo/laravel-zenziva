<?php

namespace Sawirricardo\Zenziva\Laravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ZenzivaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-zenziva')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->bind(Zenziva::class);
    }
}
