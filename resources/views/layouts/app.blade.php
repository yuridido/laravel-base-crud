<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            @include('partials/header')
        </header>

        <main>
            @yield('main')
        </main>


    </body>
</html>
