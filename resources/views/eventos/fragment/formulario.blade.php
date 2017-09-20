<div class="form-group">
	{!! Form::label('eve_id', 'ID del Evento') !!}
	{!! Form::text('eve_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_android', 'Dispositivo') !!}
	{!! Form::text('eve_android', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_id_jornada', 'ID Jornada') !!}
	{!! Form::text('eve_id_jornada', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_geo_x', 'Coordenada X') !!}
	{!! Form::text('eve_geo_x', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_geo_y', 'Coordenada Y') !!}
	{!! Form::text('eve_geo_y', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_causa', 'Causa') !!}
	{!! Form::text('eve_causa', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_duracion', 'Duracion') !!}
	{!! Form::text('eve_duracion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('emp_rut', 'Rut de la Empresa') !!}
	{!! Form::text('emp_rut', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tra_rut', 'Rut del Trabajador') !!}
	{!! Form::text('tra_rut', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_maquina', 'Maquina') !!}
	{!! Form::text('eve_maquina', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_fundo', 'Fundo') !!}
	{!! Form::text('eve_fundo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('eve_faena', 'Faena') !!}
	{!! Form::text('eve_faena', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

