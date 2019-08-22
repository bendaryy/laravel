<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    table,tr,th,td{
        margin: auto;
        padding: 10px;
        border: 1px solid black;
        text-align: center;
    }
    h1{
        text-align: center;
    }
</style>
</head>
<body>
    <div id="app">
        @include('nav')

        <main class="py-4">
            <div class="container">
                @if(session()->has('message'))
<div class="alert alert-success" role = 'alert'>
    <strong>success:</strong> {{session()->get('message')}}
</div>
@endif
            @yield('content')
                
            </div>
        </main>
    </div>
</body>
</html>
