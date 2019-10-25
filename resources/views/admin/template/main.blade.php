<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <script src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <title>@yield('title', 'Inicio')</title>
</head>
<body>
	@include('admin.template.partials.nav')
    <section class="section-admin">
        <div class="panel panel-default">
            <div class="panel-heading">
                <br><h3 class="panel-title">@yield('title')</h3>
            </div>
            <div class="panel-body">
                
                @include ('admin.template.partials.errors')
                @yield ('content')
            </div>
        </div>
    </section>

<footer class="admin-footer">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <p class="navbar-text navbar-left">Todos los derechos reservados &copy {{date('Y')}}</p>
            <p class="navbar-text navbar-center">PT v1</p>
            <p class="navbar-text navbar-right"><b>Equipo de desarrollo</b></p>
        </div>
    </nav>
</footer>
</body>
</html>