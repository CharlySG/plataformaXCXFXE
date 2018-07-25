<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('fonts/material-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet" type="text/css">
    <title>{{ config('app.name', 'Berrys') }}</title>
</head>
<body>
    @include('layouts.includes.header') 
    @include('layouts.includes.sidebar')   
        @yield('content')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sidebar_actions.js')}}"></script>
    @yield('content_js')
    {{-- <script src="{{ asset('js/header.js') }}"></script> --}}
</body>
</html>
