@extends('layouts.app')

@section('content')

    <div class="title m-b-md">
        Youtube
    </div>
    <div class="card-deck" style="margin-bottom: 1rem">

        @foreach ($videos as $video)

            <div class="card" style="min-width: 240px;">
                <div class="card-body mr-10">
                    <img class="card-img-top" src="{{ $video['thumbnail'] }}">
                    <br><br>
                    <h6 class="card-title">
                        <a href="/video/{{ $video['id'] }}">{{ $video['title'] }}</a>
                    </h6>
                    <p class="card-text">
                        {{ $video['publishedAt'] }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection