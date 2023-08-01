@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a class="btn btn-success" href="{{ route('comic-create') }}"><i class="fa-solid fa-pen"></i></a>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection