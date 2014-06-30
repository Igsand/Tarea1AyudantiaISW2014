<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Administración de Evaluaciones</title>
    {{HTML::style ('css/estilos.css')}}
</head>
<body class='fondo'>
    <header>
        <h1>Administración de Evaluaciones</h1>
     	        <hr />
     	@yield('header')
    </header>
    @yield('content')
</body>
</html>