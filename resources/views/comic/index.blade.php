@extends('layouts.base')

@section('PageTitle', 'Fumetti')

@section('content')

<div class="container">

    <h1>Lista Fumetti</h1>

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
                <td><a class="btn btn-primary" href="{{route('comic.show', ['comic' => $comic->id])}}" role="button">Visita</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection