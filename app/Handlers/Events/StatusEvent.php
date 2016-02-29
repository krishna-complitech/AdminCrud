<?php

namespace App\Handlers\Events;

use App\Events\ExampleEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use \Illuminate\Support\Facades\Log;
    
class StatusEvent
{
    /**
     * Create the event handler.
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
     * @param  ExampleEvent  $event
     * @return void
     */
    public function setLoginStatut($user)
    {        
        session()->put('status',$user->role->name);        
    }
    
    public function assignRole(){        
        session()->put('assign',$this->roles()->attach(2));
    }
}
