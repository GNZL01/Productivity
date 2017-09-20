@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Editar Cargo
			<a href="{{ route('causas.listarCausas') }}" class="btn btn-default pull-right">Regresar</a>
		</h2>

		<hr>

		@include('causas.fragment.errors')

		{!! Form::model($causa, ['route' => ['causas.actualizarCausa', $causa->cau_codigo], 'method' => 'PUT']) !!}	

			@include('causas.fragment.formulario')

		{!! Form::close() !!}
	</div>

	<div class="col-sm-4">
		@include('causas.fragment.aside')
	</div>
@endsection

