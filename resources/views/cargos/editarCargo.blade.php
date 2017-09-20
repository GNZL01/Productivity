@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar Cargo
			<a href="{{ route('cargos.listarCargos') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('cargos.fragment.errors')

		{!! Form::model($cargo, ['route' => ['cargos.actualizarCargo', $cargo->car_id], 'method' => 'PUT']) !!}	

			@include('cargos.fragment.formulario')

		{!! Form::close() !!}
	</div>

	<div class="col-sm-4">
		@include('cargos.fragment.aside')
	</div>
@endsection

