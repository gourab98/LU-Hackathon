<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="/css/bootstrap.css">
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
        <script src="/jquery-3.4.1.min.js"></script>
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}
        <script src="/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
    <body>
        @include('include.navbar')
        <div class="container">
            @include('include.messages')
            @yield('content')
        </div>
    </body>
</html>
