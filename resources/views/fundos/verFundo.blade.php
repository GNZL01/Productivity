@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Fundo
			<a href="{{ route('fundos.editarFundo', $fundo->fun_id) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<table>
			<thead>
				<tr>
			    	<td>N° de ID</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $fundo->fun_id }}</th>
			    </tr>
			</thead>
			<thead>
				<tr>
			      	<td>Nombre del Fundo</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $fundo->fun_nombre }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Comuna</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $fundo->fun_comuna }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Sector</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $fundo->fun_sector }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Region</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $fundo->fun_region }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Activo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $fundo->fun_activo }}</th>
			    </tr>
			</thead>
		</table>
	</div>

	<div class="col-sm-4">
		@include('fundos.fragment.aside')
	</div>
@endsection


