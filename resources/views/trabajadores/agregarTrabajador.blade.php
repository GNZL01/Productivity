@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Agregar Trabajador
			<a href="{{ route('trabajadores.listarTrabajadores') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('trabajadores.fragment.errors')

		{!! Form::open(['route' => 'trabajadores.guardarTrabajador']) !!}	

			@include('trabajadores.fragment.formulario')

		{!! Form::close() !!}		
	</div>

	<div class="col-sm-4">
		@include('trabajadores.fragment.aside')
	</div>
@endsection

