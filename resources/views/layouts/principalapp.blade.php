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
    @include('layouts.includes.header') @include('layouts.includes.sidebar') @yield('content')
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <form action="submit" id="formEXCEL" method="POST">
            {{ csrf_field() }}
            <div class="modal-content">
                <h3 class="center">Actualizar los datos</h3>
                <h3 class="center">
                    <i style="font-size: 50px; color: orange;" class="material-icons">
                        warning
                    </i>
                </h3>
                <p class="center">{{Auth::user()->name}} el documento debe cumplir con las especificaciones establecidas, para mas información
                    visite la siguiente pagina
                    <a href="/fileinformation">Tipo de archivo y sus especificaciones</a>
                </p>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>
                            <i class="material-icons">
                                attach_file
                            </i>
                        </span>
                        <input type="file" name="fileExcel" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn rounded red modal-close">
                        <i class="material-icons left">cancel</i> Cancelar
                    </button>
                    <button class="btn rounded success" type="submit">Cargar archivo
                        <i class="material-icons left">file_upload</i>
                    </button>
                </div>
        </form>
        </div>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/materialize.js') }}"></script>
        <script src="{{ asset('js/sweetalert.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/sidebar_actions.js')}}"></script>
        {{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}
        {{-- <script src="https://code.highcharts.com/highcharts-3d.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script> --}}
        @yield('content_js') {{--
        <script src="{{ asset('js/header.js') }}"></script> --}}
</body>

</html>
