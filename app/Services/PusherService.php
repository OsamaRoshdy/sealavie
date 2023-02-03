<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;
use Pusher\Pusher;

class PusherService
{
    private Pusher $pusher;

    public function __construct()
    {
        $this->pusher = new Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'), ['cluster' => 'eu']);
    }

    public function push(array $data)
    {
         // channel -- event
        $this->pusher->trigger('device.' . Session::get('deviceId'), 'deviceVideo', $data);
    }
}
