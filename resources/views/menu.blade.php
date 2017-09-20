<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Productivity</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    PRODUCTIVITY
                    (Vista de Cambios)
                </div>

                <div class="links">
                	<a>Se puede ordenar ASC y DESC por nombre del Cargo</a>
                    <a href="{{ route('cargos.listarCargos') }}">Lista de Cargos</a>
                </div>
                <div class="links">
                	<a>Se puede hacer una busqueda por el nombre de la causa</a>
                    <a href="{{ route('causas.listarCausas') }}">Lista de Causas</a>
                </div>
                <div class="links">
                	<a>Mantenedor de Eventos a nivel de muestra basica</a>
                    <a href="{{ route('eventos.listarEventos') }}">Lista de Eventos</a>
                </div>
                <div class="links">
                	<a>se puede agregar, editar y ver el logo de la empresa ahora</a>
                    <a href="{{ route('empresas.agregarEmpresa') }}">Agregar una Empresas</a>
                    <a href="{{ route('empresas.editarEmpresa', $empresa->emp_rut=a) }}">Editar una Empresas</a>
                    <a href="{{ route('empresas.verEmpresa', $empresa->emp_rut=a) }}">Ver Empresas</a>
                </div>
                <div class="links">
                	<a>Se puede hacer una busqueda por el nombre del Fundo</a>
                    <a href="{{ route('fundos.listarFundos') }}">Lista de Fundos</a>
                </div>
                <div class="links">
                	<a>Descarga y carga Masiva de datos para la tabla de Cargos con excel</a>
                    <a href="http://innoapsion.cl/productivity/excelamysql/importar_v1.php">Lista de Fundos</a>
                </div>

            </div>
        </div>
    </body>
</html>

