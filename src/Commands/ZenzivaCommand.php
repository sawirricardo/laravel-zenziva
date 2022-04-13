<?php

namespace Sawirricardo\Zenziva\Laravel\Commands;

use Illuminate\Console\Command;

class ZenzivaCommand extends Command
{
    public $signature = 'laravel-zenziva';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
