<?php

namespace Lamo\Stubs\Providers;

use Layer\Base\Support\BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->app->register(EventServiceProvider::class);
    }

    public function loadCommands(): void
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
        return realpath(__DIR__ . '/../..');
    }
}
