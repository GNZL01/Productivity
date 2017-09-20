<div class="form-group">
	{!! Form::label('tra_nombres', 'Nombre del Trabajador') !!}
	{!! Form::text('tra_nombres', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_apellidos', 'Apellidos del Trabajador') !!}
	{!! Form::text('tra_apellidos', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('car_id', 'Cargo') !!}
	{!! Form::text('car_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_rut', 'Rut') !!}
	{!! Form::text('tra_rut', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_dv', 'Digito verificador') !!}
	{!! Form::text('tra_dv', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_fecha_nacimiento', 'Fecha de nacimiento') !!}
	{!! Form::text('tra_fecha_nacimiento', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_licencia_conducir', 'licencia de conducir') !!}
	{!! Form::text('tra_licencia_conducir', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_vencimiento_licencia_conducir', 'Vencimiento de licencia de conducir') !!}
	{!! Form::text('tra_vencimiento_licencia_conducir', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_email', 'Correo') !!}
	{!! Form::text('tra_email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_rut', 'Rut de Empresa') !!}
	{!! Form::text('emp_rut', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_vencimiento_corma', 'Vencimiento de Corma') !!}
	{!! Form::text('tra_vencimiento_corma', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_vencimiento_examen', 'Vencimiento de Examen') !!}
	{!! Form::text('tra_vencimiento_examen', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_activo', 'Activo') !!}
	{!! Form::text('tra_activo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

