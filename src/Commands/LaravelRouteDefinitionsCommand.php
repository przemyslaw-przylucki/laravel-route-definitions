<?php

namespace SaasLaravel\LaravelRouteDefinitions\Commands;

use Illuminate\Console\Command;

class LaravelRouteDefinitionsCommand extends Command
{
    public $signature = 'laravel-route-definitions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
