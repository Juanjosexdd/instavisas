<a href=" {{route('tramites.index')}} " class="float-right btn bg-navy btn-sm px-3 py-2 elevation-4"><i class="fas fa-reply"></i>    Volver</a>
<p class="h3 text-blue">Tramites</p>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
        {!! Form::label('name', 'Nombre &',['class' => 'text-blue']) !!} {!! Form::label('slug', 'slug :',['class' => 'text-blue']) !!} <span class="text-danger">*</span>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-sitemap text-blue"></i></span>
                </div>
                {!! Form::text('name', null, ['class' => 'form-control'  . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) !!}
                {!! $errors->first('nombre', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                {!! Form::hidden('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug' ,'readonly']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('costo', 'Costo :',['class' => 'text-blue']) !!} <span class="text-danger">*</span>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-dollar-sign text-blue"></i></span>
                    </div>
                    {!! Form::text('costo', null, ['class' => 'form-control'  . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => '200']) !!}
                    {!! $errors->first('costo', ' <div class="invalid-feedback text-center"><strong>:message</strong></div>') !!}
                </div>
            </div>
    </div>
</div>

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>


    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>
@stop