@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar Trabajador
			<a href="{{ route('trabajadores.listarTrabajadores') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('trabajadores.fragment.errors')

		{!! Form::model($trabajador, ['route' => ['trabajadores.actualizarTrabajador', $trabajador->tra_id], 'method' => 'PUT']) !!}	

			@include('trabajadores.fragment.formulario')

		{!! Form::close() !!}
	</div>

	<div class="col-sm-4">
		@include('trabajadores.fragment.aside')
	</div>
@endsection

