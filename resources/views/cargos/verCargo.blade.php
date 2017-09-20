@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Cargo
			<a href="{{ route('cargos.editarCargo', $cargo->car_id) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<table>
			<thead>
				<tr>
			    	<td>N° de ID</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $cargo->car_id}}</th>
			    </tr>
			</thead>
			<thead>
				<tr>
			      	<td>Fecha de creación</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $cargo->car_tiempo}}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Nombre del Cargo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $cargo->car_descripcion}}</th>
			    </tr>
			</thead>
		</table>
	</div>

	<div class="col-sm-4">
		@include('cargos.fragment.aside')
	</div>
@endsection


