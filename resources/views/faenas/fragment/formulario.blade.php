<div class="form-group">
	{!! Form::label('fae_id', 'ID de la Faena') !!}
	{!! Form::text('fae_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fae_nombre', 'Nombre de la Faena') !!}
	{!! Form::text('fae_nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('fae_activo', 'Activo') !!}
	{!! Form::text('fae_activo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

