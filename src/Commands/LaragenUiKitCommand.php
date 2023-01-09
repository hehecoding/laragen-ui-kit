<?php

namespace Hehecoding\LaragenUiKit\Commands;

use Illuminate\Console\Command;

class LaragenUiKitCommand extends Command
{
    public $signature = 'laragen-ui-kit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
