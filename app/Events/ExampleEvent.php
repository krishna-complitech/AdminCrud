<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ExampleEvent extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    private $message;
    public function __construct($mes)
    {
        $this->message = $mes;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    
    public function getMessage()
    {
        return $this->message;
    }
}
