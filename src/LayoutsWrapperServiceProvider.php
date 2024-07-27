<?php

namespace Fuelviews\LayoutsWrapper;

use App\Models\Page;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
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
            ->hasMigration('create_pages_table')
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations();
            });

        $this->publishes([
            __DIR__.'/../database/seeders/PagesTableSeeder.php.stub' => database_path('seeders/PagesTableSeeder.php'),
        ], 'layouts-wrapper-seeders');

        $this->publishes([
            __DIR__.'/Models/Page.php' => app_path('Models/Page.php'),
        ], 'layouts-wrapper-models');

        $this->publishes([
            __DIR__.'/../resources/stubs/welcome.blade.php.stub' => resource_path('views/welcome.blade.php'),
        ], 'layouts-wrapper-welcome');
    }

    public function bootingPackage(): void
    {
        View::composer('layouts-wrapper::components.layouts.app', function ($view) {
            $routeName = Route::currentRouteName();

            $page = Page::where('slug', $routeName)
                ->first();

            $view->with('page', $page);
        });
    }
}
