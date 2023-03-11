<div class="modal fade" id="modal-lg" bis_skin_checked="1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" bis_skin_checked="1">
        <div class="modal-content" bis_skin_checked="1">
            <div class="modal-header" bis_skin_checked="1">
                <h4 class="modal-title">Registro de afiliado.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" bis_skin_checked="1">
                {!! Form::open(['route' => 'afiliados.store']) !!}
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
