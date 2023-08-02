@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('comics.update', $comic) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group m-3">
                            <label class="control-label">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo" value="{{ $comic->title }}">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Descrizione</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Inserisci la descrizione" style="height: 280px">{{ $comic->description }}</textarea>
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Copertina</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci la copertina" value="{{ $comic->thumb }}">
                            <img src="{{ $comic->thumb }}" alt="" class="thumb">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Prezzo</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo" value="{{ $comic->price }}">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Serie</label>
                            <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie" value="{{ $comic->series }}">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Data Pubblicazione</label>
                            <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la data di uscita" value="{{ $comic->sale_date }}">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Tipo</label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci il tipo" value="{{ $comic->type }}">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Disegnatori</label>
                            <input type="text" name="artists" id="artists" class="form-control" placeholder="Inserisci i disegnatori" value="{{ $comic->artists }}">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Scrittori</label>
                            <input type="text" name="writers" id="writers" class="form-control" placeholder="Inserisci gli scrittori" value="{{ $comic->writers }}">
                        </div>
                        <button class="btn btn-success m-3" type="submit">Modifica fumetto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection