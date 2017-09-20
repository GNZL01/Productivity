@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Agregar Fundo
			<a href="{{ route('fundos.listarFundos') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('fundos.fragment.errors')

		{!! Form::open(['route' => 'fundos.guardarFundo']) !!}	

			@include('fundos.fragment.formulario')

		{!! Form::close() !!}		
	</div>

	<div class="col-sm-4">
		@include('fundos.fragment.aside')
	</div>
@endsection

