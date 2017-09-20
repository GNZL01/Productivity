@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar Maquina
			<a href="{{ route('maquinas.listarMaquinas') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('maquinas.fragment.errors')

		{!! Form::model($maquina, ['route' => ['maquinas.actualizarMaquina', $maquina->maq_id], 'method' => 'PUT']) !!}	

			@include('maquinas.fragment.formulario')

		{!! Form::close() !!}
	</div>

	<div class="col-sm-4">
		@include('maquinas.fragment.aside')
	</div>
@endsection

