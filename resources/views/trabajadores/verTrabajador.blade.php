@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Trabajador
			<a href="{{ route('trabajadores.editarTrabajador', $trabajador->tra_id) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<table>
			<thead>
				<tr>
			    	<td>ID del Trabajador</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $trabajador->tra_id }}</th>
			    </tr>
			</thead>
			<thead>
				<tr>
			      	<td>Nombres</td>
			    	<td>&nbsp; &nbsp;</td>
			      	<th>{{ $trabajador->tra_nombres }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Apellidos</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_apellidos }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>ID Cargo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->car_id}}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>rut</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_rut }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>dv</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_dv }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Fecha de Nacimiento</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_fecha_nacimiento }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Licencia de Conducir</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_licencia_conducir }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Vencimiento licencia de conducir</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_vencimiento_licencia_conducir }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Correo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_email }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Rut de Empresa</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->emp_rut }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Vencimiento de Corma</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_vencimiento_corma }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Vencimiento de Examen</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_vencimiento_examen }}</th>
			    </tr>
			</thead>
			<thead>
			    <tr>
			      	<td>Activo</td>
			    	<td>&nbsp; &nbsp;</td>
			    	<th>{{ $trabajador->tra_activo }}</th>
			    </tr>
			</thead>
		</table>
	</div>

	<div class="col-sm-4">
		@include('trabajadores.fragment.aside')
	</div>
@endsection


