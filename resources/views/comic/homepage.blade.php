@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex mb-4 justify-content-end">
                <a class="btn btn-success" href="{{ Route('comics.create') }}"><i class="fa-solid fa-plus"></i></a>
            </div>
            <div class="col-12">
                <div class="card">
                    <ul class="list-group">
                        @foreach ($comics as $comic)
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{$comic->title}}</span>
                            <div>
                                <a class="btn btn-done" href="{{ Route('comics.show', $comic->id) }}"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ Route('comics.edit', $comic) }}" class="btn btn-success"><i class="fa-solid fa-pen"></i></a>
                                <form action="{{ Route('comics.destroy', $comic->id) }}" class="d-inline-block" onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection