<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;
use Pusher\Pusher;

class PusherService
{
    private Pusher $pusher;

    public function __construct()
    {
        $this->pusher = new Pusher('30ae15e4e8a034d64f38', '315b57658fc5e33c59d1', '1544848', ['cluster' => 'eu']);
    }

    public function push(array $data)
    {
        // channel -- event
        $this->pusher->trigger('device.' . Session::get('deviceId'), 'deviceVideo', $data);
    }
}
