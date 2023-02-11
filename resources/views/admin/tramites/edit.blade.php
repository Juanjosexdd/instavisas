@extends('adminlte::page')

@section('title', 'InstaVisa | EDITAR TRAMITE')
@section('content_header')
    <x-card-header>
        <h3 class="text-white">Editar tramite {{ $tramite->name }} </h3>
    </x-card-header>
@stop

@section('content')
    @include('sweetalert::alert')

    <x-card-body>

        <a href="{{ route('tramites.create') }}" class="btn bg-navy float-right ml-1 px-3 pt-1 pb-1 elevation-4"><i
                class="fas fa-plus mt-2 px-3"></i>
        </a>
        {!! Form::model($tramite, [
            'route' => ['tramites.update', $tramite],
            'method' => 'PUT',
            'autocomplete' => 'off',
        ]) !!}
        @include('admin.tramites.partials.form')
        {!! Form::submit('Guardar tramite', ['class' => 'btn bg-navy btn-block']) !!}
        {!! Form::close() !!}
    </x-card-body>
@stop

@section('footer')
    <x-footer></x-footer>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        Livewire.on('alert', function($message) {
            Swal.fire(
                'Buen Trabajo!',
                $message,
                'success'
            )
        })
    </script>
@stop
