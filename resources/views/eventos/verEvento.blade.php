@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Evento
			<a href="{{ route('eventos.editarEvento', $evento->eve_id) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<table>
			<thead>
				<tr>
			    	<td>N° de ID</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $evento->eve_id }}</th>
			    </tr>
			</thead>
			<thead>
				<tr>
			      	<td>Dispositivo</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $evento->eve_android }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>ID Jornada</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_id_jornada }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Coordenada X</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_geo_x }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Coordenada Y</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_geo_y }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Causa</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_causa }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Duracion</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_duracion }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Rut de la Empresa</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->emp_rut }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Rut del Trabajador</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->tra_rut }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Maquina</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_maquina }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Fundo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_fundo }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Faena</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $evento->eve_faena }}</th>
			    </tr>
			</thead>
		</table>
	</div>

	<div class="col-sm-4">
		@include('eventos.fragment.aside')
	</div>
@endsection


