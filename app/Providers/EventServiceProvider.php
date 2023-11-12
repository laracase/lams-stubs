<?php

namespace Lams\Stubs\Providers;

use Lams\Stubs\Listeners\EventListener;
use Layer\Base\Stream\Event;
use Layer\Base\Stream\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Event::class => [
            EventListener::class,
        ]
    ];
}
