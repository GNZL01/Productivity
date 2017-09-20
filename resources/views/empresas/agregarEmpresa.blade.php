@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Agregar Empresa
			<a href="{{ route('empresas.listarEmpresas') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('empresas.fragment.errors')

		{!! Form::open(['route' => 'empresas.guardarEmpresa', 'files'=>true]) !!}	

			@include('empresas.fragment.formulario')

		{!! Form::close() !!}		
	</div>

	<div class="col-sm-4">
		@include('empresas.fragment.aside')
	</div>
@endsection

