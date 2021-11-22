<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@extends('layouts.plantilla')
@section('content')
<div class="container">
    <div class="row p-2 mb-2 bg-primary bg-gradient text-white p-1 text-center"><h1>EDITAR FELINO</h1></div>

    <form action="{{ route('felinos.actualizar', $felino->especie) }}" method="post">

        @csrf
        <!--directiva metodo patch, o put-->
        @method('patch')
        <div class="row">
                        <div class="form-group col order-1 position-relative p-2 mb-2 bg-success bg-gradient text-white">
                                <label for="">ESPECIE</label>
                                <input class="form-control" type="text" name="especie" value="{{old('especie', $felino->especie) }}">
                        </div>
                        <div class="form-group col order-2 position-relative p-2 mb-2 bg-success bg-gradient text-white">
                                <label for="">CLASE</label>
                                <input class="form-control" type="text" name="clase" value="{{old('clase',$felino->clase) }}">
                        </div>
                        <div class="form-group col order-3 position-relative p-2 mb-2 bg-success bg-gradient text-white">
                                <label for="">ORDEN</label>
                                <input class="form-control" type="text" name="orden" value="{{old('orden',$felino->orden) }}">
                        </div>
                        <div class="form-group col order-4 position-relative p-2 mb-2 bg-success bg-gradient text-white">
                                <label for="">FAMILIA</label>
                                <input class="form-control" type="text" name="familia" value="{{old('familia',$felino->familia) }}">
                        </div>
        </div>
        <div class="row">
                        
                        <div class="form-group col order-2 position-relative p-2 mb-2 bg-info bg-gradient text-black">
                                <label for="">GENERO</label>
                                <input class="form-control" type="text" name="genero" value="{{old('genero',$felino->genero) }}">
                        </div>
                        <div class="form-group col order-3 position-relative p-2 mb-2 bg-info bg-gradient text-black">
                                <label for="">LONGEVIDAD</label>
                                <input class="form-control" type="text" name="longevidad" value="{{ old('longevidad',$felino->longevidad) }}">
                        </div>
                        <div class="form-group col order-5 position-relative p-2 mb-2 bg-info bg-gradient text-black">
                            <label for="">LONGITUD</label>
                            <input class="form-control" type="text" name="longitud" value="{{ old('longitud',$felino->longitud) }}">
                        </div>
                        <div class="form-group col order-4 position-relative p-2 mb-2 bg-info bg-gradient text-black">
                                <label for="">PESO</label>
                                <input class="form-control" type="text" name="peso" value="{{ old('peso',$felino->peso) }}">
                        </div>

        </div>
        <div class="row">
                <div class="col order-4 p-2 mb-2 bg-success bg-gradient text-white">
                        <label for="">INFORMACION</label>
                        <textarea class="form-control" name="informacion">{{old('informacion',$felino->informacion) }}</textarea>
                </div>        
        </div>
        <div class="row">
            <div class="col-md-6 col order-4 p-2 mb-2 bg-success bg-gradient text-white">
                <span class="input-group-text">URL</span>    
                <input type="text" class="form-control" name="url" value="{{old('url',$felino->url) }}" required>
            </div>
    </div>
        <div class="form-group" style="margin-top: 24px;">
                <input class="btn btn-primary" type="submit" value="Actualizar">
        </div>
    </form>
</div>
@endsection