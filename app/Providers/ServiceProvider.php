<?php

namespace Lamo\Stubs\Providers;

use Layer\Base\Support\BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function loadCommands()
    {
        $this->commands([
//            NoticeCommand::class
        ]);
    }

    public function loadSchedules()
    {
  //      $this->schedule->command(NoticeCommand::class)->everyMinute();
    }

    public function loadModule(): string
    {
        return realpath(__DIR__ . '/..');
    }
}
