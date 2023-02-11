@extends('adminlte::page')

@section('title', 'InstaVisa | REGISTROS')

@section('content')
    @include('sweetalert::alert')

    <x-card-header>
        <h3 class="text-white">Lista de registros</h3>
    </x-card-header>

    @livewire('show-log-sistema')
@stop


@section('css')
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">

@stop

@section('js')
    <script src=" {{ asset('vendor/sweetalert2.js') }}  "></script>
    <script src=" {{ asset('vendor/sweetalert-eliminar.js') }} "></script>
    <script src=" {{ asset('vendor/sweetalert-estatus.js') }} "></script>
    <script src=" {{ asset('vendor/sweetalert-estatus2.js') }} "></script>
    <script src=" {{ asset('vendor/popper.min.js') }} "></script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

@stop
