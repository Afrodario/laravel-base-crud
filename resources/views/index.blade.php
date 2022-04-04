{{-- Estensione del layout --}}
@extends('layouts.base')

{{-- Nominazione della pagina, tramite il segnaposto del layout --}}
@section('PageTitle', 'Home Page')

{{-- Codice del contenuto tramite il segnaposto content --}}
@section('content')

<div class="container">
  <h1>Archivio Fumetti</h1>
  <a class="btn btn-primary" href="{{route('comic.index')}}">Vai all'archivio</a>
</div>

@endsection