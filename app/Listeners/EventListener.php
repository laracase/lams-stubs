<?php

namespace Lams\Stubs\Listeners;

use Lams\Stubs\Jobs\ExampleJob;
use Layer\Base\Stream\Event;

class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param Event $event
     * @return void
     */
    public function handle(Event $event)
    {
        switch ($event->name) {
            case 'stubs.update':
                // db

                $event->payload = [
                    'msg' => ''
                ];
                dispatch(new ExampleJob($event))->onQueue('notice');
                break;
            default:
                break;
        }
    }
}
