<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\YouTubeVideo;

class VideoController extends Controller
{
    public function index($id)
    {
        $video = new YouTubeVideo();
        $data = $video->getVideo($id);

        $view = view('video', ['data' => $data[0]])->render();
        return (new Response($view));
    }

}
