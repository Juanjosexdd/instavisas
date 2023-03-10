<a href=" {{ route('clientes.index') }} " class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4"><i
        class="fas fa-reply"></i> Volver</a>
<p class="h3 text-blue">Información Personal</p>
<hr>
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name', 'Nombres & ',['class' => 'text-blue ']) !!}       {!! Form::label('slug', 'slug :',['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                    <div class="input-group mb-3">
                        {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                        {!! $errors->first('name', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                        {!! Form::hidden('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug' ,'readonly']) !!}
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
                    <div class="input-group" >
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
                    <div class="input-group">
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
                    <div class="input-group" >
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
                    {!! Form::label('password', 'contraseña : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                    <div class="input-group" >
                        {!! Form::text('password', null, [
                            'class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''),
                            'placeholder' => 'Usuario',
                        ]) !!}
                        {!! $errors->first('password', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group" >
                    {!! Form::label('cita_cas', 'Cita CAS : ', ['class' => 'text-blue']) !!}                  
                    {{ Form::date('cita_cas', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" >
                    {!! Form::label('cita_embajada', 'Cita Embajada : ', ['class' => 'text-blue']) !!}
                    {{ Form::date('cita_embajada', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group" >
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
<br>
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
    </script>
@stop
