@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex mb-4 justify-content-end">
                <a class="btn btn-success" href="{{ route('comic-create') }}"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="col-12">
                <div class="card">
                    <ul class="list-group">
                        @foreach ($comics as $comic)
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{$comic->title}}</span>
                            <div>
                                <a class="btn btn-done" href="{{ route('comic', $comic->id) }}"><i class="fa-solid fa-eye"></i></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection