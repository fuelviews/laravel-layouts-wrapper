<?php

namespace Fuelviews\LayoutsWrapper\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LayoutsWrapperInstallCommand extends Command
{
    public $signature = 'layouts-wrapper:install';

    public $description = 'Install layout wrapper welcome.blade.php view';

    public function handle(): int
    {
        File::copy(__DIR__.'/../../stubs/welcome.blade.php.stub', resource_path('views/welcome.blade.php'));

        $this->info('welcome.blade.php.stub has been published successfully.');

        return self::SUCCESS;
    }
}
