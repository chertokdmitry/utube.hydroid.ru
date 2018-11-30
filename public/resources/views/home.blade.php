@extends('layouts.app')

@section('content')

        <div class="row">

                @foreach ($channels as $channel)

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="{{ $channel['thumbnail'] }}" alt="">
                        <div class="card-body">
                            <p class="card-text">{{ $channel['title'] }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/channel/{{ $channel['id'] }}" class="btn btn-sm btn-outline-secondary">Перейти</a>

                                </div>

                                @php
                                {{ $date = date('Y-m-d H:i', strtotime($channel['publishedAt'] )); }}
                                @endphp
                                <small class="text-muted">{{ $date }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
@endsection