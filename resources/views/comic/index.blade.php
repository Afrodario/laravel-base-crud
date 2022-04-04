@extends('layouts.base')

@section('PageTitle', 'Fumetti')

@section('content')

<div class="container">

    <h1>Lista Fumetti</h1>

    <a class="btn btn-warning" href="{{route('comic.create')}}">Inserisci un nuovo fumetto</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Cover</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Messa in vendita</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Comandi</th>
        </tr>
        </thead>
        <tbody>

            {{-- Con un ciclo stampo tutte le informazioni passate alla view dal controller tramite compact di comics --}}
            @foreach($comics as $comic)
            <tr>
                <th>{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td><img src="{{$comic->thumb}}"></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>

                {{-- Inserisco un pulsante che riporti alla rotta show per ogni fumetto tramite relativo id --}}
                <td class="d-flex">
                    <a class="btn btn-primary" href="{{route('comic.show', ['comic' => $comic->id])}}" role="button">Visita</a>
                    <a class="btn btn-warning" href="{{route('comic.edit', ['comic' => $comic->id])}}" role="button">Modifica</a>

                    {{-- Per richiamare la rotta destroy è necessario creare un form, con metodo POST e richiamare il sottometodo DELETE --}}
                    <form method="POST" action="{{route('comic.destroy', ['comic' => $comic->id])}}">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Cancella</button>

                    </form>
                </td>
                
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection