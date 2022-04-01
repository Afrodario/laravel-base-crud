<!DOCTYPE html>
<html lang="it">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Importazione di Bootstrap --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- Segnaposto del layout --}}
    <title>@yield('PageTitle')</title>

</head>
<body>
    
    {{-- Segnaposto del contenuto di pagina --}}
    @yield('content')


    {{-- Importazione di Bootstrap --}}
    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>