
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Empresas
			<a href="{{ route('empresas.agregarEmpresa') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>

		@include('empresas.fragment.info')

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Rut Empresa</th>
					<th>Nombre Corto</th>
					<th>Representante Legal</th>
					<th>Correo</th>
					<th>Estado</th>     
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>

			<!-- $empresas es la variable creada en el EmpresaController y la dejamos en singular como $empresa -->
			@foreach($empresas as $empresa)
				@if (!empty($empresa))
					<tbody>
						<tr>
							<td>{{ $empresa->emp_rut }}</td>
							<td>{{ $empresa->emp_nombre_corto }}</td>
							<td>{{ $empresa->emp_representante }}</td>
							<td>{{ $empresa->emp_email }}</td>
							<td>{{ $empresa->emp_activo }}</td>
							<td>
								<a href="{{ route('empresas.verEmpresa', $empresa->emp_rut) }}" class="btn btn-link">Ver</a>
							</td>
							<td>
								<a href="{{ route('empresas.editarEmpresa', $empresa->emp_rut) }}" class="btn btn-link">Editar</a>
							</td>
							<td>
								<form action="{{ route('empresas.eliminarEmpresa', $empresa->emp_rut) }}" method="POST">
									{{ csrf_field()}}
									<input type="hidden" name="_method" value="DELETE">
									<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $empresa->emp_rut }} ?')">Eliminar</button>
								</form>
							</td>
						<tr>
					<tbody>
				@else
					<tbody>
						<tr>
							<td align="center"> ------- No hay Empresas registradas ------- </td>
						</tr>
					</tbody>
				@endif
			@endforeach
			</tbody>
		</table>
		{!! $empresas->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('empresas.fragment.aside')
	</div>

@endsection