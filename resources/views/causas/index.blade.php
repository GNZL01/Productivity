
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Causas
			<a href="{{ route('causas.agregarCausa') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>

		<!-- Funcion del buscador --> 
		<form action="{{ route('causas.listarCausas') }}" method='get'>
		    <div class="input-group">
		      	<input type="text" name="cau_nombre" class="form-control">
		      	<span class="input-group-btn">
		        	<button type="submit" class="btn btn-primary">Buscar</button>
		    	</span>
			</div>
  		</form>

		@include('causas.fragment.info')

		<!-- Mensaje de total de resultados de la busqueda y total --> 
		@if(request()->has('cau_nombre'))
			<p>hay {{ $causas->total() }} Causas registradas con los parametros de busqueda</p>
		@else
    		<p>hay {{ $causas->total() }} Causas registradas</p>
		@endif 

		<br>

		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre de la Causa </th>
					<th>Activo</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<!-- $causas es la variable creada en el CargoController y la dejamos en singular como $causa -->
				@foreach($causas as $causa)
					<tr>
						<td>{{ $causa->cau_codigo }}</td>
						<td>{{ $causa->cau_nombre }}</td>
						<td>{{ $causa->cau_activo }}</td>
						<td>
							<a href="{{ route('causas.verCausa', $causa->cau_codigo) }}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('causas.editarCausa', $causa->cau_codigo) }}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('causas.eliminarCausa', $causa->cau_codigo) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $causa->cau_codigo }} ?')">Eliminar</button>
							</form>
						</td>
					<tr>
				@endforeach
			</tbody>
		</table>
		{!! $causas->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('causas.fragment.aside')
	</div>

@endsection