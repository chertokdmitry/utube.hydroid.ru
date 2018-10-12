<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\YouTubeVideo;

class ChannelController extends Controller
{
    public function index(string $id)
    {
        $videos = new YouTubeVideo();
        $videoData = $videos->getVideoGallery($id);
        $view = view('channel', ['videos' => $videoData])->render();
        return (new Response($view));
    }
}
