@extends('adminlte::page')

@section('title', 'MAKRO | PERFIL DE USUARIO')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@endsection
@section('js')
    <script src="{{ mix('js/app.js') }}" defer></script>

@endsection

@section('content')
    <x-card-header>
        <h3 class="text-white h3">Perfil de {{ auth()->user()->display_user }}</h3>
    </x-card-header>
    <div class="container">
        <div class="card elevation-4 col-md-12 col-sm-12" style="border-radius: 0.95rem">
            <div class="card-body">
                <div class="row justify-content">
                    <div class="col-md-12">
                        <p class="h3 text-blue">Información Personal</p>
                        <hr>
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')

                        @endif
                        <br>
                        <p class="h3 text-blue">Actualizar Contraseña</p>
                        <hr>

                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-4 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>

                            <x-jet-section-border />
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    @livewireScripts

@stop

@section('js')
    <script>
        
    </script>
@stop
