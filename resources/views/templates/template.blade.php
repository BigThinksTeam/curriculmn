<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rporn</title>
    <meta name="description" content="" />
    <meta name="theme-color" content="#0d0d0d">
    <meta property="og:description" content="" />
    <meta name="twitter:description" content="" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icon-web.svg" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icon-web.svg" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icon-web.svg" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body class="c-app">
    <div id="app" class="w-100">
        <div class="c-wrapper">
            @include('templates.header')
            <div class="c-body">
                <main class="c-main">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>
