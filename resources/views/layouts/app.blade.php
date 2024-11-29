<!-- name: Accueil -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'Titre par défaut')</title>
    <link rel="alternate" hreflang="fr">
    <!-- title  -->

    <title>Accueil - Care-test</title>
    <link rel='icon' href="{{ asset('media/favicon.png') }}" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="">
    @include('partials.loader')
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css">
    
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js'></script>
    <script src='https://unpkg.com/aos@2.3.1/dist/aos.js'></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/FileSaver.js') }}"></script>
    <script src="{{ asset('js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>

</body>

</html>