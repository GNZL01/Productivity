@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Agregar Evento
			<a href="{{ route('eventos.listarEventos') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('eventos.fragment.errors')

		{!! Form::open(['route' => 'eventos.guardarEvento']) !!}	

			@include('eventos.fragment.formulario')

		{!! Form::close() !!}		
	</div>

	<div class="col-sm-4">
		@include('eventos.fragment.aside')
	</div>
@endsection

