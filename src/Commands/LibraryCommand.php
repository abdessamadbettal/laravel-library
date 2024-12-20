<?php

namespace VendorName\Library\Commands;

use Illuminate\Console\Command;

class LibraryCommand extends Command
{
    public $signature = 'library';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
