<a href=" {{ route('admin.roles.index') }} " class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4"><i
        class="fas fa-reply"></i> Volver</a>
<p class="h3 text-blue">Rol</p>
<hr>
<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('name', 'Nombre : ', ['class' => 'text-blue']) !!} <span class="text-danger">*</span>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-clipboard-list text-blue"></i></span>
            </div>
            {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}

        </div>
    </div>
</div>
<h2 class="h4 text-center font-weight-bold text-secondary">Lista de permisos</h2>
{{-- Gestion --}}
<div id="gestion">
    <div class="card card-navy">
        <div class="card-header">
            <h4 class="card-title w-100">
                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne"  aria-expanded="false">
                    <label class="text-muted d-inline">
                        {!! Form::checkbox('permissions[]', 13, null, null, ['class' => 'icheckbox_flat-yellow']) !!}
                    </label> &nbsp; &nbsp;
                    <i class="fas fa-fw fa-user-shield text-blue "></i> Gestión de clientes
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="collapse" data-parent="#gestion">
            <div class="card-body table-responsive">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Ver</th>
                            <th>Registrar</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-fw fa-users-cog text-blue "></i> Gestión
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 14, null, null, ['class' => 'icheckbox_flat']) !!} Ver gestiones
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 15, null, null, ['class' => 'icheckbox_flat']) !!} Registrar clientes
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 16, null, null, ['class' => 'icheckbox_flat']) !!} Editar cliente
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 17, null, null, ['class' => 'icheckbox_flat']) !!} Eliminar cliente
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-recycle text-blue "></i> Renovacion
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 18, null, null, ['class' => 'icheckbox_flat']) !!} Ver Listado de renovación
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-recycle text-blue "></i> Seguimiento
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 19, null, null, ['class' => 'icheckbox_flat']) !!} Ver Listado de Seguimiento
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-recycle text-blue "></i> Adelanto
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 20, null, null, ['class' => 'icheckbox_flat']) !!} Ver Listado de Adelantos
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-user-astronaut text-blue "></i> Prioridad
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 21, null, null, ['class' => 'icheckbox_flat']) !!} Ver Listado de Prioridads
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-user-graduate text-blue "></i> Esudiante
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 22, null, null, ['class' => 'icheckbox_flat']) !!} Ver Listado de Esudiantes
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-canadian-maple-leaf text-blue "></i> Canada
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 23, null, null, ['class' => 'icheckbox_flat']) !!} Ver Listado de Canada
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-calendar-check text-blue "></i> Citas Pasaporte
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 23, null, null, ['class' => 'icheckbox_flat']) !!} Ver Listado de Citas Pasaporte
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- Seguridad --}}
<div id="seguro">
    <div class="card card-navy">
        <div class="card-header">
            <h4 class="card-title w-100">
                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseTwo"  aria-expanded="false">
                    <label class="text-muted d-inline">
                        {!! Form::checkbox('permissions[]', 25, null, null, ['class' => 'icheckbox_flat-yellow']) !!}
                    </label> &nbsp; &nbsp;
                    <i class="fas fa-fw fa-user-shield text-blue "></i> Permisos de seguridad del sistema
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#seguro">
            <div class="card-body table-responsive">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Ver</th>
                            <th>Registrar</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-fw fa-users-cog text-blue "></i> Usuarios
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 2, null, null, ['class' => 'icheckbox_flat']) !!} Ver Usuario
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 3, null, null, ['class' => 'icheckbox_flat']) !!} Registrar Usuario
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 4, null, null, ['class' => 'icheckbox_flat']) !!} Editar Usuario
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 5, null, null, ['class' => 'icheckbox_flat']) !!} Eliminar Usuario
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 6, null, null, ['class' => 'icheckbox_flat']) !!} Estatus Usuario
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-code-branch text-blue "></i> Roles
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 7, null, null, ['class' => 'icheckbox_flat']) !!} Ver rol
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 8, null, null, ['class' => 'icheckbox_flat']) !!} Registrar rol
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 9, null, null, ['class' => 'icheckbox_flat']) !!} Editar rol
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 10, null, null, ['class' => 'icheckbox_flat']) !!} Eliminar rol
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-clipboard-list text-blue "></i> Registros
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 11, null, null, ['class' => 'icheckbox_flat']) !!} Ver registros
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-traffic-light text-blue "></i> Sesiones
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 12, null, null, ['class' => 'icheckbox_flat']) !!} Ver sesiones
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                        <tr>
                            <th class="d-flex">
                                <i class="fas fa-cloud-download-alt text-blue "></i> Respaldos
                            </th>
                            <th>
                                <label class="text-muted d-inline">
                                    {!! Form::checkbox('permissions[]', 26, null, null, ['class' => 'icheckbox_flat']) !!} Ver Respaldos
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                            <th>
                                <label class="text-muted d-inline font-italic text-center">
                                    *** X ***
                                </label>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/icheck/skins/flat/flat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/icheck/skins/flat/_all.css') }}">
@stop

@section('js')
    <script src=" {{ asset('vendor/jquery/jquery.min.js') }}  "></script>
    <script src=" {{ asset('vendor/icheck/icheck.js') }}  "></script>
    <script src=" {{ asset('vendor/adminlte/dist/js/demo.js') }}  "></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat',
                radioClass: 'iradio_flat'
            });
        });
        $(document).ready(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat'
            });
        });
    </script>
@endsection
