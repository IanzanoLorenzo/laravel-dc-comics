@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('comic-store') }}" method="POST">
                        @csrf
                        <div class="form-group m-3">
                            <label class="control-label">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Descrizione</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Inserisci la descrizione">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Copertina</label>
                            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci la copertina">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Prezzo</label>
                            <input type="text" name="price" id="price" class="form-control" placeholder="Inserisci il prezzo">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Serie</label>
                            <input type="text" name="series" id="series" class="form-control" placeholder="Inserisci la serie">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Data Pubblicazione</label>
                            <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Inserisci la serie">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Tipo</label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="Inserisci il tipo">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Disegnatori</label>
                            <input type="text" name="artists" id="artists" class="form-control" placeholder="Inserisci i disegnatori">
                        </div>
                        <div class="form-group m-3">
                            <label class="control-label">Scrittori</label>
                            <input type="text" name="writers" id="writers" class="form-control" placeholder="Inserisci gli scrittori">
                        </div>
                        <button class="btn btn-success m-3" type="submit">Crea fumetto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection