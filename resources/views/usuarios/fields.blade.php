
<div class="form-group col-sm-6">
    {!! Form::label('rol_id', 'Tipo Usuario') !!}
    {!! Form::select('rol_id',$roles,null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>

{{-- <div class="form-group col-sm-6">
    {!! Form::label('dni', 'DNI:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control decimal','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div> --}}
<div class="form-group col-sm-6">
    {!! Form::label('nombre_usuario', 'Nombre:') !!}
    {!! Form::text('nombre_usuario', null, ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','data-validation' => 'required']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', ['class' => 'form-control ','data-validation' => 'required']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-dark']) !!}
    <a href="{{ route('usuario.index') }}" class="btn btn-default">Cancelar</a>
</div>
