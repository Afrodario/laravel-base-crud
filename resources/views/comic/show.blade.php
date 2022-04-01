@extends('layouts.base')

@section('PageTitle')
{{$comic->title}}
@endsection

@section('content')

<div class="container">

    <h1>{{$comic->title}}</h1>

    <div>
        <div>ID:{{$comic->id}}</div>
        <div>Titolo:{{$comic->title}}</div>
        <div>Descrizione:{{$comic->description}}</div>
        <div>Cover:<img src="{{$comic->thumb}}"></div>
        <div>Prezzo:{{$comic->price}}</div>
        <div>Serie:{{$comic->series}}</div>
        <div>Messa in vendita:{{$comic->sale_date}}</div>
        <div>Tipologia:{{$comic->type}}</div>
    </div>

</div>

<a class="btn btn-primary" href="{{route('comic.index')}}" role="button">Torna indietro</a>

@endsection