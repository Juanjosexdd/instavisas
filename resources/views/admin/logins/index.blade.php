@extends('adminlte::page')

@section('title', 'InstaVisas | USUARIOS')

@section('content')
    @include('sweetalert::alert')

    <x-card-header>
        <h3 class="text-white">Lista de logs</h3>
    </x-card-header>
    
    <div class="container">
        @livewire('show-login-sistema')
    </div>
@stop

