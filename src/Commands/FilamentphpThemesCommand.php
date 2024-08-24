<?php

namespace MedanWeb\FilamentphpThemes\Commands;

use Illuminate\Console\Command;

class FilamentphpThemesCommand extends Command
{
    public $signature = 'filamentphp-themes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
