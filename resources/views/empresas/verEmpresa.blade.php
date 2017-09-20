@extends('layout')

@section('contenido')
	<div class="col-xs-12 col-sm-8">
		<h2>Ver Empresa
			<a href="{{ route('empresas.editarEmpresa', $empresa->emp_rut) }}" class="btn btn-default pull-right">Editar</a>
		</h2>

		<hr>

		<div>
			<div class="row">
				<div class="col-md-6">
					<table>
						<thead>
							<tr>
				    			<td>Rut de Empresa</td>
				    			<td>&nbsp; &nbsp;</td>
				      			<th>{{ $empresa->emp_rut}}</th>
				    		</tr>
						</thead>
						<thead>
							<tr>
						      	<td>Nombre Corto</td>
						    	<td>&nbsp; &nbsp;</td>
						      	<th>{{ $empresa->emp_nombre_corto}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Razón Social</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_razon_social}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Ciudad</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_ciudad}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Teléfono</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_telefono}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Correo</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_email}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Representante Legal</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_representante}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Teléfono del Representante</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_representante_telefono}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Correo del Representante</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_representante_email}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Contraseña</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_clave}}</th>
						    </tr>
						</thead>
						<thead>
						    <tr>
						      	<td>Activo</td>
						    	<td>&nbsp; &nbsp;</td>
						    	<th>{{ $empresa->emp_activo}}</th>
						    </tr>
						</thead>
					</table>
				</div>
				<div class="col-md-6">
					<tr>
					   	<td>Logo</td>
					   	<td><img width="100px" src="{{ Storage::url($empresa->emp_logo) }}"></td>
				    </tr>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-4">
		@include('empresas.fragment.aside')
	</div>
@endsection




 