@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Agregar Faena
			<a href="{{ route('faenas.listarFaenas') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('faenas.fragment.errors')

		{!! Form::open(['route' => 'faenas.guardarFaena']) !!}	

			@include('faenas.fragment.formulario')

		{!! Form::close() !!}		
	</div>

	<div class="col-sm-4">
		@include('faenas.fragment.aside')
	</div>
@endsection

