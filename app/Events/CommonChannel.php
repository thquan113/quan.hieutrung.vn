<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
class CommonChannel implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $userId;    
    public function __construct($userId)
    {
        $this->userId = $userId;        
    }
    public function broadcastOn(): Channel
    {
        return new Channel('commonroom');
    }
    public function broadcastAs()
    {
        return 'CommonChannel';
    }
}