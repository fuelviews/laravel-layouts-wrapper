<?php

namespace Fuelviews\LayoutWrapper\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LayoutWrapperInstallCommand extends Command
{
    public $signature = 'layout-wrapper:install';
    public $description = 'Install the layout wrapper package';

    public function handle(): int
    {
        File::copy(__DIR__ . '/../../stubs/welcome.blade.php', resource_path('views/welcome.blade.php'));

        $this->info('welcome.blade.php has been published successfully.');

        return self::SUCCESS;
    }
}
