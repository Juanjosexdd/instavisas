@extends('adminlte::page')

@section('title', 'InstaVisa | CREAR CLIENTE')

@section('content')
    @include('sweetalert::alert')
    <x-card-header>
        <h3 class="text-white">Crear nuevo cliente</h3>
    </x-card-header>
    <x-card-body>

        {!! Form::open(['route' => 'clientes.store']) !!}

        @include('admin.clientes.partials.form')
        {!! Form::submit('Guardar cliente', ['class' => 'btn bg-navy btn-block']) !!}
        {!! Form::close() !!}
    </x-card-body>
@stop

@section('footer')
    <x-footer></x-footer>
@stop

@section('js')

    <script>
        swal({
            "timer": 1800,
            "title": "Título",
            "text": "Notificación Básica",
            "showConfirmButton": false
        });
    </script>
@stop
@section('css')
    <link rel="stylesheet" href=" {{ asset('vendor/cards.css') }} ">
@stop
