@extends('layouts.base')

@section('PageTitle', 'Inserimento nuovo fumetto')

@section('content')
<div class="container">

    {{-- Il form dovrà avere metodo POST e bisogna specificare la rotta store
        per immagazzinare i dati creati in ACTION --}}
    <form method="POST" action="{{route('comic.store')}}">

        {{-- Meccanismo di verifica --}}
        @csrf

        <label for="thumb">Indirizzo immagine</label>
        <input type="text" id="thumb" name="thumb">

        <label for="title">Titolo</label>
        <input type="text" id="title" name="title">

        <label for="series">Serie</label>
        <input type="text" id="series" name="series">

        <label for="description">Descrizione</label>
        <input type="text" id="description" name="description">

        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price">

        <label for="sale_date">Messa in vendita</label>
        <input type="text" id="sale_date" name="sale_date">

        <label for="type">Tipologia</label>
        <input type="text" id="type" name="type">

        <button type="submit" class="btn btn-primary">Invia</button>
        
    </form>



</div>
@endsection