<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Proyecto Productivity en Laravel 5.4 -->
		<title>App | Productivity</title>

		{{ Html::style('css/bootstrap.min.css') }}
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12">				
					<h1 class="page-header text-center">Mantenedor Productivity</h1>
				</div>

				<!-- Se declara la directiva yield con variable Contenido -->
				@yield('contenido')
			
			</div>
		</div>

		{{ Html::script('js/jquery.min.js') }}
		{{ Html::script('js/bootstrap.min.js') }}
	</body>
</html>


