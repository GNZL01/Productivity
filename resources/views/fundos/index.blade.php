
<!-- Se llama a la plantilla Layout.blade.php para heredar atributos -->
@extends('layout')

<!-- De esta forma solo editamos el Contenido -->
@section('contenido')
	
	<div class="col-xs-12 col-sm-8">
		<h2>
			Lista de Fundos
			<a href="{{ route('fundos.agregarFundo') }}" class="btn btn-primary pull-right">Agregar Nuevo</a>
		</h2>

		<hr>

		<!-- Funcion del buscador --> 
		<form action="{{ route('fundos.listarFundos') }}" method='get'>
		    <div class="input-group">
		      	<input type="text" name="fun_nombre" class="form-control">
		      	<span class="input-group-btn">
		        	<button type="submit" class="btn btn-primary">Buscar</button>
		    	</span>
			</div>
  		</form>

		@include('fundos.fragment.info')

		<!-- Mensaje de total de resultados de la busqueda y total --> 
		@if(request()->has('fun_nombre'))
			<p>hay {{ $fundos->total() }} Fundos registrados con los parametros de busqueda</p>
		@else
    		<p>hay {{ $fundos->total() }} Fundos registrados</p>
		@endif  		
  		

  		<br>

  		<!-- Tabla Listar --> 
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre del Fundo</th>
					<th>Region</th>
					<th>Comuna</th>
					<th>activo</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<!-- $fundos es la variable creada en el FundoController y la dejamos en singular como $fundo -->
				@foreach($fundos as $fundo)
					<tr>
						<td>{{ $fundo->fun_id }}</td>
						<td>{{ $fundo->fun_nombre }}</td>
						<td>{{ $fundo->fun_region }}</td>
						<td>{{ $fundo->fun_comuna }}</td>
						<td>{{ $fundo->fun_activo }}</td>

						<td>
							<a href="{{ route('fundos.verFundo', $fundo->fun_id) }}" class="btn btn-link">Ver</a>
						</td>
						<td>
							<a href="{{ route('fundos.editarFundo', $fundo->fun_id) }}" class="btn btn-link">Editar</a>
						</td>
						<td>
							<form action="{{ route('fundos.eliminarFundo', $fundo->fun_id) }}" method="POST">
								{{ csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link" onclick="return confirm('¿Está seguro que desea eliminar el registro {{ $fundo->fun_id }} ?')">Eliminar</button>
							</form>
						</td>
					<tr>
				@endforeach
			</tbody>
		</table>
		{!! $fundos->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('fundos.fragment.aside')
	</div>

@endsection



