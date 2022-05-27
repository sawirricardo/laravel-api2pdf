<?php

namespace Sawirricardo\Api2pdf\Commands;

use Illuminate\Console\Command;

class Api2pdfCommand extends Command
{
    public $signature = 'laravel-api2pdf';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
