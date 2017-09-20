
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Cargos
			<a href="{{ route('cargos.agregarCargo') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>

		@include('cargos.fragment.info')

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Fecha de creación </th>
					<th>Nombre del Cargo 
        				@if(request('order_type') == 'DESC')
            				<a href="{{ url('Productivity/cargos/listar?order=car_descripcion&order_type=ASC') }}"> ▲</a>  
        				@else
            				<a href="{{ url('Productivity/cargos/listar?order=car_descripcion&order_type=DESC') }}"> ▼</a>  
        				@endif
        			</th>
        			<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<!-- $cargos es la variable creada en el CargoController y la dejamos en singular como $cargo -->
				@foreach($cargos as $cargo)
					<tr>
						<td>{{ $cargo->car_id }}</td>
						<td>{{ $cargo->car_tiempo }}</td>
						<td>{{ $cargo->car_descripcion }}</td>
						<td>
							<a href="{{ route('cargos.verCargo', $cargo->car_id) }}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('cargos.editarCargo', $cargo->car_id) }}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('cargos.eliminarCargo', $cargo->car_id) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $cargo->car_id }} ?')">Eliminar</button>
							</form>
						</td>
					<tr>
				@endforeach
			</tbody>
		</table>
		{!! $cargos->appends(\Request::except('page'))->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('cargos.fragment.aside')
	</div>

@endsection