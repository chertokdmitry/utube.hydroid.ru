@extends('layouts.app')

@section('content')

        <div class="title m-b-md">
            Youtube
        </div>
        <div class="card-deck" style="margin-bottom: 1rem">

                @foreach ($channels as $channel)

                <div class="card" style="min-width: 240px;">
                    <div class="card-body mr-10">
                        <img class="card-img-top" src="{{ $channel['thumbnail'] }}">
                        <br><br>
                        <h6 class="card-title">
                            <a href="/channel/{{ $channel['id'] }}">{{ $channel['title'] }}</a>
                        </h6>
                        <p class="card-text">
                            {{ $channel['publishedAt'] }}
                        </p>
                    </div>
                </div>
                @endforeach
        </div>
@endsection