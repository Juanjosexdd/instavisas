@extends('adminlte::page')

@section('title', 'InstaVisa | CREAR CLIENTE')

@section('content')
    @include('sweetalert::alert')
    <x-card-header>
        <h3 class="text-white">Ficha de {{ $cliente->name }}</h3>
    </x-card-header>
    <x-card-body>

        <div class="invoice p-3 mb-3" style="border-radius: 0.95rem" bis_skin_checked="1">
            <a href="{{ route('clientes.edit', $cliente) }}"
                class="btn bg-navy float-right ml-1 px-3 pt-1 pb-1 elevation-4"><i class="fas fa-edit mt-2 px-3"></i></a>

            <div class="row" bis_skin_checked="1">
                <div class="col-12" bis_skin_checked="1">
                    <h4>
                        <small class="float-right">Ingreso: {{ $cliente->created_at->toFormattedDateString() }}</small>
                    </h4>
                </div>

            </div>

            <div class="row invoice-info" style="border-radius: 0.95rem" bis_skin_checked="1">
                <div class="col-sm-4 invoice-col" bis_skin_checked="1">
                    <h5 class="text-blue h5 text-underline" style="text-decoration: underline;"> <strong> Datos</strong>
                    </h5>
                    <address>
                        <strong>{{ $cliente->name }} {{ $cliente->last_name }}</strong><br>
                        <strong>{{ $cliente->tipodocumento->abreviado }}-{{ $cliente->identification }}</strong><br>
                        <strong>Telefono:</strong> {{ $cliente->phone }}<br>
                        <strong>Nro. contacto:</strong> {{ $cliente->phone2 }}<br>
                        <strong>Email:</strong> {{ $cliente->email }}
                    </address>
                </div>

                <div class="col-sm-4 invoice-col" bis_skin_checked="1">
                    <h5 class="text-blue h5 text-underline" style="text-decoration: underline;"> <strong> Fechas</strong>
                    </h5>
                    <address>
                        <strong>Cita CAS:</strong>
                        @if ($cliente->cita_cas == null)
                            <span class="text-muted font-italic">*** En espera ***</span>
                        @else
                            <span class="text-muted">{{ $cliente->cita_cas }}</span>
                        @endif
                        <br>
                        <strong>Cita Embajada:</strong>
                        @if ($cliente->cita_embajada == null)
                            <span class="text-muted font-italic">*** En espera ***</span>
                        @else
                            <span class="text-muted">{{ $cliente->cita_embajada }}</span>
                        @endif
                        <br>
                        <strong>Registrado :</strong> {{ $cliente->created_at->toFormattedDateString() }}<br>
                        <strong>Actualizador :</strong> {{ $cliente->updated_at->toFormattedDateString() }}<br>


                    </address>
                </div>

                <div class="col-sm-4 invoice-col" bis_skin_checked="1">
                    <h5 class="text-blue h5 text-underline" style="text-decoration: underline;"> <strong> Otros</strong>
                    </h5>
                    <strong>Usuario :</strong> {{ $cliente->user }}<br>
                    <strong>Contraseña:</strong> {{ $cliente->password }}<br>
                    <strong>Observación:</strong> {{ $cliente->observation }}<br>
                </div>

            </div>


            <div class="row" bis_skin_checked="1">
                <div class="col-md-12 table-responsive" bis_skin_checked="1">
                    <h5 class="text-blue pt-2">Tramites asociados a {{ $cliente->name }}
                        {{ $cliente->last_name }}</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-blue">Nro</th>
                                <th class="text-blue">Tramite</th>
                                <th class="text-blue">Estatus</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cliente->tramites as $tramite)
                                <tr class="text-secondary font-weight-bold text-sm">
                                    <td>
                                        {{ $tramite->id }}
                                    </td>
                                    <td>
                                        {{ $tramite->name }}

                                    </td>
                                    <td>
                                        {{ $tramite->estatuses->last()->name }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12 table-responsive" bis_skin_checked="1">
                    <h5 class="text-blue pt-2">Grupo familiar de {{ $cliente->name }}
                        {{ $cliente->last_name }}</h5>

                    <table class="table table-striped">
                        <thead>
                            <tr >
                                <th class="text-blue">Identificación</th>
                                <th class="text-blue">Nombres</th>
                                <th class="text-blue">
                                    Tramite
                                </th>
                                <th>
                                    <button type="button"
                                        class="btn bg-navy btn-xs float-right ml-1 px-3 pt-0 pb-0 elevation-4"
                                        data-toggle="modal" data-target="#modal-lg">
                                        <i class="fas fa-plus mt-2 px-3"></i>
                                    </button>
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente->afiliados as $afiliado)
                                <tr data-widget="expandable-table" class="text-secondary font-weight-bold text-sm">
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#modal-lg">
                                            
                                            {{ $afiliado->tipodocumento->abreviado }}-{{ $afiliado->identification }}
                                        </a>
                                        </td>
                                    <td>
                                        {{ $afiliado->name }} - {{ $afiliado->last_name }}
                                        <p class="d-block">{{ $afiliado->email }}</p>
                                    </td>
                                    <td>  
                                        @foreach ($afiliado->tramiteafiliados as $tramiteafiliado)
                                            {{$tramiteafiliado->name}}
                                            <br>
                                            @foreach ($tramiteafiliado->estatusafiliado as $status)
                                                {{$status->name}}
                                            @endforeach
                                        @endforeach
                                        
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-sm elevation-2"
                                            data-toggle="modal" data-target="#modal-edit">
                                            <i class="fas fa-edit px-1 py-1 text-blue"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-card-body>


    @include('admin.clientes.partials.modal-create')
    <div class="modal fade" id="modal-edit" bis_skin_checked="1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg" bis_skin_checked="1">
            <div class="modal-content" bis_skin_checked="1">
                <div class="modal-header" bis_skin_checked="1">
                    <h4 class="modal-title">Editar de afiliado.</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" bis_skin_checked="1">
                    {!! Form::model($afiliado, [
                        'route' => ['afiliados.update', $afiliado],
                        'method' => 'PUT',
                        'autocomplete' => 'off',
                    ]) !!}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombres & ', ['class' => 'text-blue']) !!} {!! Form::label('slug', 'slug :', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        <div class="input-group mb-3">
                                            {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                            {!! $errors->first('nombres', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                                            {!! Form::hidden('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug', 'readonly']) !!}
                                            <input type="hidden" name="cliente_id" id="cliente_id"
                                                value="{{ $cliente->id }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('last_name', 'Apellidos : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        <div class="input-group mb-3">
                                            {!! Form::text('last_name', null, [
                                                'class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''),
                                                'placeholder' => 'Apellidos',
                                            ]) !!}
                                            {!! $errors->first('last_name', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    {!! Form::label('tipodocumento_id', 'N : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                    {!! Form::select('tipodocumento_id', $tipodocumentos, null, [
                                        'class' => 'form-control select2',
                                        'placeholder' => '',
                                    ]) !!}
                                    @error('tipodocumento_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('identification', 'Cedula : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        <div class="input-group mb-3">
                                            {!! Form::text('identification', null, [
                                                'class' => 'form-control' . ($errors->has('identification') ? ' is-invalid' : ''),
                                                'placeholder' => 'Cedula',
                                            ]) !!}
                                            {!! $errors->first(
                                                'identification',
                                                ' <div class="invalid-feedback text-center"><strong>:message</strong></div>',
                                            ) !!}

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('email', 'Correo eléctronico : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        <div class="input-group mb-3">
                                            {!! Form::email('email', null, [
                                                'class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),
                                                'placeholder' => 'Correo electronico',
                                            ]) !!}
                                            {!! $errors->first('email', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('phone', 'Celular : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        <div class="input-group" bis_skin_checked="1">
                                            {!! Form::text('phone', null, [
                                                'class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''),
                                                'placeholder' => 'Celular',
                                            ]) !!}
                                            {!! $errors->first('phone', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('phone2', 'Telefono : ', ['class' => 'text-blue']) !!}
                                        <div class="input-group" bis_skin_checked="1">
                                            {!! Form::number('phone2', null, ['class' => 'form-control', 'placeholder' => 'Telefono']) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        {!! Form::label('nacionalidad_id', 'Nacionalidad : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        {!! Form::select('nacionalidad_id', $nacionalidads, null, [
                                            'class' => 'form-control select2' . ($errors->has('nacionalidad_id') ? ' is-invalid' : ''),
                                            'placeholder' => '',
                                        ]) !!}
                                        {!! $errors->first(
                                            'nacionalidad_id',
                                            ' <div class="invalid-feedback text-center"><strong>:message</strong></div>',
                                        ) !!}

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        {!! Form::label('tipotramite_id', 'Categoria : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        {!! Form::select('tipotramite_id', $tipotramites, null, [
                                            'class' => 'form-control select2' . ($errors->has('tipotramite_id') ? ' is-invalid' : ''),
                                            'placeholder' => '',
                                        ]) !!}
                                        {!! $errors->first(
                                            'tipotramite_id',
                                            ' <div class="invalid-feedback text-center"><strong>:message</strong></div>',
                                        ) !!}

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('user', 'Usuario : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        <div class="input-group" bis_skin_checked="1">
                                            {!! Form::text('user', null, [
                                                'class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''),
                                                'placeholder' => 'Usuario',
                                            ]) !!}
                                            {!! $errors->first('user', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('password', 'Contraseña : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                                        <div class="input-group" bis_skin_checked="1">
                                            {!! Form::text('password', null, [
                                                'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''),
                                                'placeholder' => 'Contraseña',
                                            ]) !!}
                                            {!! $errors->first('password', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" bis_skin_checked="1">
                                        {!! Form::label('observation', 'Observación : ', ['class' => 'text-blue']) !!}
                                        {!! Form::textarea('observation', null, [
                                            'class' => 'form-control' . ($errors->has('observation') ? ' is-invalid' : ''),
                                            'rows' => '2',
                                        ]) !!}
                                        {!! $errors->first('observation', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        {!! Form::label('', 'Selecciona uno o mas tramites : ', ['class' => 'text-blue mb-0']) !!}
                                        <br>
                                        @foreach ($tramites as $tramite)
                                            <label style="font-weight: 400;" class="mb-0">
                                                {!! Form::checkbox('tramites[]', $tramite->id, null, ['class' => ' iradio_flat ']) !!}
                                                {{ $tramite->name }}.
                                            </label>
                                            <br>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between" bis_skin_checked="1">
                    {!! Form::submit('Guardar afiliado', ['class' => 'btn bg-navy btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>






@stop

@section('footer')
    <x-footer></x-footer>
@stop
@section('css')
    {{-- <link rel="stylesheet" href="{{asset('vendor/select2/css/bootstrap-select.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/icheck/skins/flat/flat.css') }}">
@stop

@section('js')
    <script src=" {{ asset('vendor/jquery/jquery.min.js') }}  "></script>
    <script src=" {{ asset('vendor/icheck/icheck.js') }}  "></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat',
                radioClass: 'iradio_flat'
            });
        });

        $('.select2').select2({
            placeholder: 'Selecciona una opcion'
        });

        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        swal({
            "timer": 1800,
            "title": "Título",
            "text": "Notificación Básica",
            "showConfirmButton": false
        });

        $('#expandable-table').ExpandableTable('toggleRow')
    </script>
@stop
@section('css')
    <link rel="stylesheet" href=" {{ asset('vendor/cards.css') }} ">
@stop
