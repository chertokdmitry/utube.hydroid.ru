<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\YouTubeVideo;
use Config;

class HomeController extends Controller
{
    public function __construct()
    {
        Config::set('time.updatetime', date(DATE_RFC3339, strtotime("-6 hours")));
    }

    public function index()
    {
        $time = Config::get('time.updatetime');
        $channels = new YouTubeVideo();
        $channelsData = $channels->getChanels($time);
        $view = view('home', ['channels' => $channelsData])->render();
        return (new Response($view));
    }
}
