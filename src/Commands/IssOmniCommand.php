<?php

namespace Bildvitta\IssOmni\Commands;

use Illuminate\Console\Command;

class IssOmniCommand extends Command
{
    public $signature = 'iss-omni';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
