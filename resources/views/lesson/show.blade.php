@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $lesson->name }}</div>

                    <div class="card-body">
                        {{ $lesson->description }}
                        <hr />
                        <a href="{{ route('show_play_list', ['playList' => $lesson->playList]) }}">Back to playlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
