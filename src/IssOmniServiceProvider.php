<?php

namespace Bildvitta\IssOmni;

use Bildvitta\IssOmni\Commands\IssOmniCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class IssOmniServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('iss-omni')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_iss-omni_table')
            ->hasCommand(IssOmniCommand::class);
    }
}
