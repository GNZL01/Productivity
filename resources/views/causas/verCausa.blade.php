@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Causa
			<a href="{{ route('causas.editarCausa', $causa->cau_codigo) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<table>
			<thead>
				<tr>
			    	<td>N° de ID</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $causa->cau_codigo}}</th>
			    </tr>
			</thead>
			<thead>
				<tr>
			      	<td>Nombre de la Causa</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $causa->cau_nombre}}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Maquina Id's</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $causa->maq_id}}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Activo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $causa->cau_activo}}</th>
			    </tr>
			</thead>
		</table>
	</div>

	<div class="col-sm-4">
		@include('causas.fragment.aside')
	</div>
@endsection


