<div class="form-group">
	{!! Form::label('maq_tipo', 'Tipo de Maquina') !!}
	{!! Form::text('maq_tipo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_rut', 'Rut de Empresa') !!}
	{!! Form::text('emp_rut', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('maq_activo', 'Activo') !!}
	{!! Form::text('maq_activo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

