<?php

namespace Fuelviews\LayoutWrapper;

use Fuelviews\LayoutWrapper\Commands\LayoutWrapperInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Support\Facades\File;

class LayoutWrapperServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('layout-wrapper')
            ->hasConfigFile('layout-wrapper')
            ->hasViews()
            ->hasCommand(LayoutWrapperInstallCommand::class);
    }
}
