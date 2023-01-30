@extends('adminlte::page')

@section('title', 'INSTAVISAS | LISTADO DE CLIENTES ')

@section('content')
@include('sweetalert::alert')


    <x-card-header class="">
        <h3 class="text-white pt-2">Lista de adelantos</h3>
    </x-card-header>


    @livewire('clientes.show-adelanto')

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
