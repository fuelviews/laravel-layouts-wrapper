<?php

namespace Fuelviews\LayoutWrapper;

use Fuelviews\LayoutWrapper\Commands\LayoutWrapperInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Support\Facades\File;

class LayoutWrapperServiceProvider extends PackageServiceProvider
{
    const MARKER_FILE = 'layout_wrapper_installed';

    public function configurePackage(Package $package): void
    {
        $package
            ->name('layout-wrapper')
            ->hasConfigFile('layout-wrapper')
            ->hasViews()
            ->hasCommand(LayoutWrapperInstallCommand::class);
    }

    public function bootingPackage()
    {
        $this->autoPublishStubs();
    }

    protected function autoPublishStubs(): void
    {
        $markerPath = storage_path(self::MARKER_FILE);

        if (!File::exists($markerPath)) {

            File::copy(__DIR__ . '../../stubs/welcome.blade.php', resource_path('views/welcome.blade.php'));

            File::put($markerPath, 'installed');

        }
    }
}
