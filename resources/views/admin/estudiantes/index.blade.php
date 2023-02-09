@extends('adminlte::page')

@section('title', 'INSTAVISAS | LISTADO DE CLIENTES ')

@section('content_header')
    <x-card-header class="">
        <h3 class="text-white pt-2">Lista de visas de estudiante</h3>
    </x-card-header>
@stop
@section('content')
    @include('sweetalert::alert')
    @livewire('clientes.show-estudiante')
@endsection

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
