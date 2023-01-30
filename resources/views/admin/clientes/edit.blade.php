@extends('adminlte::page')

@section('title', 'INSTAVISAS | EDITAR CLIENTE')


@section('content')
    @include('sweetalert::alert')
    <x-card-header>
        <h3 class="text-white">Editar cliente {{ $cliente->name }} </h3>
    </x-card-header>
    <x-card-body>

            <a href="{{ route('clientes.create') }}" class="btn bg-navy float-right ml-1 px-3 pt-1 pb-1 elevation-4"><i class="fas fa-plus mt-2 px-3"></i>
            </a>
        {!! Form::model($cliente, ['route' => ['clientes.update', $cliente], 'method' => 'PUT', 'autocomplete' => 'off']) !!}
        @include('admin.clientes.partials.form')
        {!! Form::submit('Guardar cliente', ['class' => 'btn bg-navy btn-block']) !!}
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
