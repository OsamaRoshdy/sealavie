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
        $this->pusher->push(['from' => '0.00', 'to' => '0.30']);
        return redirect()->route('welcome');
    }


    public function welcome()
    {
        return view('welcome');
    }

    public function welcomePost(Request $request)
    {
        $this->pusher->push(['from' => '0.30', 'to' => '1.00']);
        return redirect()->route('firstQuestion');
    }

    public function firstQuestion()
    {
        return view('questions.one');
    }

    public function firstQuestionPost(Request $request)
    {
        $this->pusher->push(['from' => '1.00', 'to' => '1.30']);
        return redirect()->route('secondQuestion');
    }

    public function secondQuestion()
    {
        return view('questions.two');
    }

    public function secondQuestionPost(Request $request)
    {
        $this->pusher->push(['from' => '1.30', 'to' => '2.00']);
        return redirect()->route('secondQuestion');
    }



}
