<?php

namespace Fuelviews\LayoutWrapper\Commands;

use Illuminate\Console\Command;

class LayoutWrapperCommand extends Command
{
    public $signature = 'laravel-layout-wrapper';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
