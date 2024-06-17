@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            Lista Comics
        </h1>

        <table class="table">
            <thead>
                <tr>
                    <th class="col">id</th>
                    <th class="col">Titolo</th>
                    <th class="col">Descrizione</th>
                    <th class="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaComics as $comic)
                    <tr>
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                    
                @endforeach
            </tbody>

        </table>

        
    </div>
    
@endsection