<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
        <div>
            <main>
                <div class="row">
                    
                    <a class="col order-1 btn btn-outline-light" href="{{ route('felinos.crear') }}"><div>
                            AGREGAR FELINO </div></a>
                    <a class="col order-2 btn btn-outline-warning" href="{{ route('felinos.index') }}"><div> 
                            VER LISTA DE FELINOS</div></a>
                </div>
                @yield('content')
            </main>
        </div>
</body>
</html>