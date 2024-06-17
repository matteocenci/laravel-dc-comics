@extends('layouts.app')

@section('content')
    <h1>Crea nuovo fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-label" name="description" id="description">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price">
        </div>

        <button class="btn btn-success" type="submit">Salva</button>
    </form>
    
@endsection