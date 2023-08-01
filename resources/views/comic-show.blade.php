@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{ $comic->title }}
                    <img class='thumb' src="{{ $comic->thumb }}" alt="">
                    <span>{{ $comic->description }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection