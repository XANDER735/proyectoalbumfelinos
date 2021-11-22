<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
@extends('layouts.plantilla')
@section('content')
<body class="bg-black">
    
</body>
<div class="container ">
        <div class="row bg-primary bg-gradient text-white p-1 text-center"><h1>CREAR NUEVO FELINO</h1></div>

        <form action="{{ route('felinos.guardar') }}" class="row g-3"  method="post" enctype="multipart/form-data" id="formulario">
            <!--generar token-->    
            @csrf
            <div class="row">
                <div class="col order-1 position-relative p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">ESPECIE</label>
                        <input class="form-control" type="text" name="especie" value="{{ old('especie') }}" required>
                </div>
                <div class="col order-2 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">CLASE</label>
                        <input class="form-control" type="text" name="clase" value="{{ old('clase') }}" required>
                </div>
                <div class=" col order-3 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">ORDEN</label>
                        <input class="form-control" type="text" name="orden" value="{{ old('orden') }}" required>
                </div>
                <div class="col order-4 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">FAMILIA</label>
                        <input class="form-control" type="text" name="familia" value="{{ old('familia') }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col order-2 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">GENERO</label>
                        <input class="form-control" type="text" name="genero" value="{{ old('genero') }}" required>
                </div>
                <div class="col order-3 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">LONGEVIDAD</label>
                        <input class="form-control" type="text" name="longevidad" value="{{ old('longevidad') }}" required>
                </div>
                <div class="col order-4 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">PESO</label>
                        <input class="form-control" type="text" name="peso" value="{{ old('peso') }}" required>
                </div>
                <div class="col order-5 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">LONGITUD</label>
                        <input class="form-control" type="text" name="longitud" value="{{ old('longitud') }}">
                </div>
            </div>
            <div class="row">
                <div class="col order-4 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">INFORMACION</label>
                        <textarea class="form-control"  name="informacion" required>{{ old('informacion') }}</textarea>
                </div> 
            </div>
            <div class="row">
                    <div class="col-md-6 col order-4 p-2 mb-2 bg-success bg-gradient text-white">
                        <span class="input-group-text">URL</span>    
                        <input type="text" class="form-control" name="url" value="{{ old('url') }}" required>
                    </div>
            </div>
            
                <div>
                        <input class="btn btn-primary" name="crear" type="submit" value="Crear">
                </div>
            
        </form>
</div>
@endsection