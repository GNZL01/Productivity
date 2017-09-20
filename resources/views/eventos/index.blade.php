
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Eventos
			<a href="{{ route('eventos.agregarEvento') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>

		@include('eventos.fragment.info')

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Dispositivo</th>
					<th>Causa</th>
					<th>Duracion</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<!-- $eventos es la variable creada en el EventoController y la dejamos en singular como $evento -->
				@foreach($eventos as $evento)
					<tr>
						<td>{{ $evento->eve_id }}</td>
						<td>{{ $evento->eve_android }}</td>
						<td>{{ $evento->eve_causa }}</td>
						<td>{{ $evento->eve_duracion }}</td>
						<td>
							<a href="{{ route('eventos.verEvento', $evento->eve_id) }}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('eventos.editarEvento', $evento->eve_id) }}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('eventos.eliminarEvento', $evento->eve_id) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $evento->eve_id }} ?')">Eliminar</button>
							</form>
						</td>
					<tr>
				@endforeach
			</tbody>
		</table>
		{!! $eventos->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('eventos.fragment.aside')
	</div>

@endsection