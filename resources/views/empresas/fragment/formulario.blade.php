<div class="form-group">
	{!! Form::label('emp_rut', 'Rut de la Empresa') !!}
	{!! Form::text('emp_rut', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_nombre_corto', 'Nombre corto de la Empresa') !!}
	{!! Form::text('emp_nombre_corto', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_razon_social', 'Razón Social') !!}
	{!! Form::text('emp_razon_social', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_ciudad', 'Ciudad') !!}
	{!! Form::text('emp_ciudad', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_telefono', 'Teléfono') !!}
	{!! Form::text('emp_telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_email', 'Correo') !!}
	{!! Form::text('emp_email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_representante', 'Representante Legal') !!}
	{!! Form::text('emp_representante', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_representante_telefono', 'Teléfono del Representante') !!}
	{!! Form::text('emp_representante_telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_representante_email', 'Correo del Representante') !!}
	{!! Form::text('emp_representante_email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp-clave', 'Contraseña') !!}
	{!! Form::text('emp_clave', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_logo', 'logo') !!}
	<!-- {!! Form::file('emp_logo', ['class'=>'form-control']) !!} -->
	<input type="file" class="form-control" name="emp_logo">
</div>
<div class="form-group">
	{!! Form::label('emp_activo', 'Estado de Activación') !!}
	{!! Form::text('emp_activo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

