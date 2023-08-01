@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a class="btn btn-success" href="{{ route('comic-create') }}"><i class="fa-solid fa-pen"></i></a>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <ul class="list-group">
                        @foreach ($comics as $comic)
                        <li class="list-group-item d-flex justify-content-between">
                            <a href="{{ route('comic', $comic->id) }}">{{$comic->title}}</a>
                            <div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection