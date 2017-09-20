@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Faena
			<a href="{{ route('faenas.editarFaena', $faena->fae_id) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<table>
			<thead>
				<tr>
			    	<td>ID de Faena</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $faena->fae_id }}</th>
			    </tr>
			</thead>
			<thead>
				<tr>
			      	<td>Nombre de la Faena</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $faena->fae_nombre }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Activo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $faena->fae_activo }}</th>
			    </tr>
			</thead>
		</table>
	</div>

	<div class="col-sm-4">
		@include('faenas.fragment.aside')
	</div>
@endsection


