
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Maquinas
			<a href="{{ route('maquinas.agregarMaquina') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>

		@include('maquinas.fragment.info')

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Tipo de Maquina</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<!-- $maquinas es la variable creada en el MaquinaController y la dejamos en singular como $maquina -->
				@foreach($maquinas as $maquina)
					<tr>
						<td>{{ $maquina->maq_id }}</td>
						<td>{{ $maquina->maq_tipo }}</td>
						<td>
							<a href="{{ route('maquinas.verMaquina', $maquina->maq_id) }}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('maquinas.editarMaquina', $maquina->maq_id) }}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('maquinas.eliminarMaquina', $maquina->maq_id) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $maquina->maq_id }} ?')">Eliminar</button>
							</form>
						</td>
					<tr>
				@endforeach
			</tbody>
		</table>
		{!! $maquinas->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('maquinas.fragment.aside')
	</div>

@endsection