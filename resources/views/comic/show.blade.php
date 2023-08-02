@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header h1 text-center text-uppercase">{{ $comic->title }}</div>
                    <img class='thumb' src="{{ $comic->thumb }}" alt="">
                    <div>Descrizione: {{ $comic->description }}</div>
                    <div>Serie: {{ $comic->series }}</div>
                    <div>Tipo: {{ $comic->type }}</div>
                    <div>Disegnato da: {{ $comic->artists }}</div>
                    <div>Scritto da: {{ $comic->writers }}</div>
                    <div>Prezzo: {{ $comic->price }}</div>
                    <div>Data di uscita: {{ $comic->sale_date }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection