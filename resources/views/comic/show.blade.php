@extends('layouts.base')

@section('PageTitle')
{{$currentComic->id}}
@endsection

@section('content')

<div class="container">

    <h1>{{$currentComic->title}}</h1>

    <div>
        <div>ID:{{$currentComic->id}}</div>
        <div>Titolo:{{$currentComic->title}}</div>
        <div>Descrizione:{{$currentComic->description}}</div>
        <div>Cover:<img src="{{$currentComic->thumb}}"></div>
        <div>Prezzo:{{$currentComic->price}}</div>
        <div>Serie:{{$currentComic->series}}</div>
        <div>Messa in vendita:{{$currentComic->sale_date}}</div>
        <div>Tipologia:{{$currentComic->type}}</div>
    </div>

</div>

<a class="btn btn-primary" href="{{route('comic.index')}}" role="button">Torna indietro</a>

@endsection