@extends('adminlte::page')

@section('title', 'InstaVisa | INFORMACION PERSONAL')

@section('content')

    <x-card-header>
        <h3 class="text-white">Datos de {{ $user->name }} {{ $user->last_name }}</h3>
    </x-card-header>

    <div class="container">
        <div class="card elevation-5 col-md-12 col-sm-12 pt-3" style="border-radius: 0.95rem">

            <div class="card-body">
                <div class="ror">
                    <div class="col-md-12">
                        @can('admin.users.edit')
                            
                        <a href=" {{ route('admin.users.edit', $user) }} "
                        class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4 ml-2"><i class="fas fa-edit"></i>
                        Editar </a>
                        @endcan
                        <a href=" {{ route('admin.users.index') }} "
                            class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4 "><i class="fas fa-reply"></i>
                            Volver </a>

                        <p class="h3 text-blue">Información Personal</p>

                    </div>
                </div>
                <hr>
                <div class="row invoice-info">
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Cedula</strong><br>
                        <p class="text-muted">{{ $user->tipodocumento->abreviado }}-{{ $user->cedula }}</p>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Nombre</strong><br>
                        <div class="name-avatar d-flex align-items-center">
                            <div class="avatar mr-2 flex-shrink-0">
                                <img class="img-size-32 img-circle image elevation-2"" width=" 35" height="35"
                                    src="{{ $user->profile_photo_url }}" />
                            </div>
                            <div class="txt">
                                <div class="text-muted">{{ $user->name }} - {{ $user->last_name }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Nombre de usuario</strong>
                        <br>
                        <span class="text-muted">{{ $user->username }}</span>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Correo electrónico</strong>
                        <br>
                        <span class="text-muted">{{ $user->email }}</span>
                    </div>
                </div>

                <br>
                <div class="row invoice-info">
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Dirección</strong><br>
                        @if ($user->address == null)
                            <span class="text-muted font-italic">*** Falta Información ***</span>
                        @else
                            <span class="text-muted">{{ $user->address }}</span>
                        @endif
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Contraseña</strong><br>
                        <span class="text-muted">**********</span>
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Creado</strong>
                        <br>
                        <span class="text-muted">{{ $user->created_at }}</span>

                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Actualizado</strong><br>
                        <span class="text-muted">{{ $user->updated_at }}</span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Celular</strong><br>
                        @if ($user->phone == null)
                            <span class="text-muted font-italic">*** Falta Información ***</span>
                        @else
                            <span class="text-muted">{{ $user->phone }}</span>
                        @endif
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Telefono</strong><br>
                        @if ($user->phone == null)
                            <span class="text-muted font-italic">*** Falta Información ***</span>
                        @else
                            <span class="text-muted">{{ $user->phone2 }}</span>
                        @endif
                    </div>
                    <div class="col-sm-3 invoice-col">
                        <strong class="font-14 text-blue">Estatus</strong><br>
                        @if ($user->estatus == 1)
                            <span class="badge badge-success">Activo</span>
                        @else
                            <span class="badge badge-danger">Inactivo</span>
                        @endif
                    </div>

                </div>
                <br>
                <div class="row invoice-info">
                    <div class="col-sm-12  invoice-col">
                        <strong class="font-14 text-blue">Permisos del usuario</strong><br><br>
                        <div class="row">
                            @foreach ($user->getAllPermissions() as $permission)
                                <div class="col-md-3">
                                    <span
                                        class="form-control form-control-sm text-center shadow-sm">{{ $permission->description }}</span>&nbsp;&nbsp;
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
<script>

</script>
@stop
