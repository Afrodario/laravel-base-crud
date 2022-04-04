@extends('layouts.base')

@section('PageTitle')
    Modifica di {{$comic->title}}
@endsection

@section('content')
<div class="container">

    <h1>Modifica di {{$comic->title}}</h1>
    {{-- Il form dovrà avere metodo POST e bisogna specificare la rotta store
        per immagazzinare i dati creati in ACTION --}}
    <form method="POST" action="{{route('comic.update', ['comic' => $comic->id])}}">

        {{-- Meccanismo di verifica --}}
        @csrf
        {{-- Sottometodo per poter effettuare la raccolta dei dati da inviare all'update --}}
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">Indirizzo immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series)}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description', $comic->description)}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Messa in vendita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old('type', $comic->type)}}">
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
        
    </form>



</div>
@endsection