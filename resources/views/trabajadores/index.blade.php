
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Trabajadores
			<a href="{{ route('trabajadores.agregarTrabajador') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>  		

  		<br>

  		<!-- Tabla Listar --> 
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID Trabajador</th>
					<th>Nombres</th>
					<th>Apellidos </th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<!-- $trabajadores es la variable creada en el TrabajadorController y la dejamos en singular como $trabajador -->
				@foreach($trabajadores as $trabajador)
					<tr>
						<td>{{ $trabajador->tra_id }}</td>
						<td>{{ $trabajador->tra_nombres }}</td>
						<td>{{ $trabajador->tra_apellidos }}</td>
						<td>
							<a href="{{ route('trabajadores.verTrabajador', $trabajador->tra_id) }}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('trabajadores.editarTrabajador', $trabajador->tra_id) }}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('trabajadores.eliminarTrabajador', $trabajador->tra_id) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $trabajador->tra_id }} ?')">Eliminar</button>
							</form>
						</td>
					<tr>
				@endforeach
			</tbody>
		</table>
		{!! $trabajadores->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('trabajadores.fragment.aside')
	</div>

@endsection