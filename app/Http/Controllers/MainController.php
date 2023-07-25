<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use App\Services\PusherService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Pusher\Pusher;

class MainController extends Controller
{

    protected $pusher;
    public function __construct(PusherService $pusher)
    {
        $this->pusher = $pusher;
    }
    public function session()
    {
        return view('session');
    }

    public function putSession(Request $request)
    {
        Session::put('deviceId', $request->deviceId);
        return redirect()->route('start');
    }

    public function start()
    {
        return view('start');
    }

    public function startPost()
    {
        $this->pusher->push(['from' => '0', 'to' => '75']);
        return redirect()->route('welcome');
    }


    public function welcome()
    {
        return view('welcome');
    }

    public function welcomePost(Request $request)
    {
        return redirect()->route('secondQuestion');
    }


    public function secondQuestion()
    {
        return view('questions.two');
    }

    public function secondQuestionPost(Request $request)
    {
        if ($request->room == 1) {
            $this->pusher->push(['from' => '75', 'to' => '188']);
            return redirect()->route('secondQuestion');
        }
        return redirect()->route('404');
    }


    public function notFound()
    {
        return view('404');
    }

}
