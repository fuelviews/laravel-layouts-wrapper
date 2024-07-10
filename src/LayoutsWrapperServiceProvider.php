<?php

namespace Fuelviews\LayoutsWrapper;

use Fuelviews\LayoutsWrapper\Commands\LayoutsWrapperInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LayoutsWrapperServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('layouts-wrapper')
            ->hasConfigFile('layouts-wrapper')
            ->hasViews()
            ->hasCommand(LayoutsWrapperInstallCommand::class);
    }
}
