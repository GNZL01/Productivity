<div class="form-group">
	{!! Form::label('cau_nombre', 'Nombre de la Causa') !!}
	{!! Form::text('cau_nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('maq_id', 'Id de Maquina') !!}
	{!! Form::text('maq_id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('cau_activo', 'Activo') !!}
	{!! Form::text('cau_activo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

