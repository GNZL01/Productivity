
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Faenas
			<a href="{{ route('faenas.agregarFaena') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>

		@include('faenas.fragment.info')

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre de la Faena</th>
					<th>Activo</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<!-- $faenas es la variable creada en el FaenaController y la dejamos en singular como $faena -->
				@foreach($faenas as $faena)
					<tr>
						<td>{{ $faena->fae_id }}</td>
						<td>{{ $faena->fae_nombre }}</td>
						<td>{{ $faena->fae_activo }}</td>
						<td>
							<a href="{{ route('faenas.verFaena', $faena->fae_id) }}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('faenas.editarFaena', $faena->fae_id) }}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('faenas.eliminarFaena', $faena->fae_id) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $faena->fae_id }} ?')">Eliminar</button>
							</form>
						</td>
					<tr>
				@endforeach
			</tbody>
		</table>
		{!! $faenas->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('faenas.fragment.aside')
	</div>

@endsection