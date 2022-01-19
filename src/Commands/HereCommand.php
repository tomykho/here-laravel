<?php

namespace TomyKho\Here\Commands;

use Illuminate\Console\Command;

class HereCommand extends Command
{
    public $signature = 'here-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
