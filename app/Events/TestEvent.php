<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public array $data;
    public int $deviceId;

    public function __construct($data, $deviceId)
    {
        $this->data = $data;
        $this->deviceId = $deviceId;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('device.' . $this->deviceId);
    }


    public function broadcastAs()
    {
        return 'my-event';
    }
    public function broadcastWith()
    {
        return ['id' => 50000];
    }
}
