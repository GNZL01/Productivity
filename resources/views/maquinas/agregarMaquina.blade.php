@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Agregar Maquina
			<a href="{{ route('maquinas.listarMaquinas') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('maquinas.fragment.errors')

		{!! Form::open(['route' => 'maquinas.guardarMaquina']) !!}	

			@include('maquinas.fragment.formulario')

		{!! Form::close() !!}		
	</div>

	<div class="col-sm-4">
		@include('maquinas.fragment.aside')
	</div>
@endsection

