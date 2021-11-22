<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
<body class="bg-success bg-gradient text-white">
<div class="row p-0 mb-3 bg-warning bg-gradient text-black"><h1>ALBUM</h1></div>

    @extends('layouts.plantilla')
    @section('title','Felinos')
    @section('content')
    <div class="container">
        <div class="row bg-danger bg-gradient text-white p-1 text-center"><h3>FELINOS</h3></div>
        <div class="row">
    <!--directiva de blade-->
    @forelse ($felinos as $felino)
    <button class="col-3 btn btn-outline-warning"><div class=""><img src="{{ $felino->url}}" alt="" style="width:100%;">
            <div class=""><h3>{{ $felino->especie}}</h3></div>
                            <a href="{{ route('felinos.editar', $felino->especie) }}">Editar</a>
                            <a href="{{ route('felinos.ver', $felino->especie) }}">Ver</a>
                            <a href="" onclick="if(confirm('¿Eliminar {{ $felino->especie }} ?'))event.preventDefault();
                                document.getElementById('borrar-{{ $felino->especie }}').submit();">Eliminar</a>
                            <form id="borrar-{{ $felino->especie }}" method="post"
                                    action="{{ route('felinos.eliminar', $felino->especie) }}">
                                    @csrf
                                    @method('DELETE')
                            </form>
                        
            </div></button>
        @empty
        <div class="row p-2 mb-2 bg-danger bg-gradient text-white p-1 text-center">
        <p>No hay felinos!</p>
        </div>    
    @endforelse     
   </div>
    @endsection
    </body>