@extends('layouts.app')

@section('content')

    <div class="row">

        @foreach ($videos as $video)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ $video['thumbnail'] }}" alt="" style="max-width: 240px;">
                    <div class="card-body">
                        <p class="card-text">{{ $video['title'] }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            @if ($video['id'])
                            <div class="btn-group">
                                <a href="/video/{{ $video['id'] }}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                            </div>
                            @endif
                                @php
                                    {{ $date = date('Y-m-d H:i', strtotime($video['publishedAt'] )); }}
                                @endphp
                            <small class="text-muted">{{ $date }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <a href="/" class="btn btn-secondary btn-lg btn-block">Вернуться</a>
    </div>
@endsection