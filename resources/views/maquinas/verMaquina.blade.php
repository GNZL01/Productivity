@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Maquina
			<a href="{{ route('maquinas.editarMaquina', $maquina->maq_id) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<table>
			<thead>
				<tr>
			    	<td>ID de Maquina</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $maquina->maq_id }}</th>
			    </tr>
			</thead>
			<thead>
				<tr>
			      	<td>Tipo de Maquina</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $maquina->maq_tipo }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>ID de Empresa</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $maquina->emp_rut }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Activo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $maquina->maq_activo }}</th>
			    </tr>
			</thead>
		</table>
	</div>

	<div class="col-sm-4">
		@include('maquinas.fragment.aside')
	</div>
@endsection


