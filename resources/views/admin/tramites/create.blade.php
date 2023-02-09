@extends('adminlte::page')

@section('title', 'INSTAVISAS | CREAR TRAMITE')

@section('content_header')
    <x-card-header>
        <h3 class="text-white">Crear nuevo tramite</h3>
    </x-card-header>
@stop
@section('content')
    @include('sweetalert::alert')

    <x-card-body>

        {!! Form::open(['route' => 'tramites.store']) !!}

        @include('admin.tramites.partials.form')
        {!! Form::submit('Guardar tramite', ['class' => 'btn bg-navy btn-block']) !!}
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
