<?php

namespace Exula\LaravelDelayedAttributes\Commands;

use Illuminate\Console\Command;

class LaravelDelayedAttributesCommand extends Command
{
    public $signature = '-elayed-attributes:flush';

    public $description = 'Immediately flush all delayed attributes to the database';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
