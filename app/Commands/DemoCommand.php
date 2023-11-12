<?php

namespace Lams\Stubs\Commands;

use Layer\Base\Support\BaseCommand;

class DemoCommand extends BaseCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lams:stubs-demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Execute the console command.
     *
     */
    public function handle(): void
    {
        var_dump('test');
    }
}
