<div class="form-group">
	{!! Form::label('fun_id', 'Id del Fundo') !!}
	{!! Form::text('fun_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fun_nombre', 'Nombre del Fundo') !!}
	{!! Form::text('fun_nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fun_region', 'Region') !!}
	{!! Form::text('fun_region', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fun_comuna', 'Comuna') !!}
	{!! Form::text('fun_comuna', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fun_sector', 'Sector') !!}
	{!! Form::text('fun_sector', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fun_activo', 'Activo') !!}
	{!! Form::text('fun_activo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

