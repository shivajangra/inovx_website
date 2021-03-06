<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inovx') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="img/logo/inovx.png">

		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

		<link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">

		<link rel="stylesheet" href="{{ asset('css/style.css')}}">

		<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
