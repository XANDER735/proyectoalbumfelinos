<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
@extends('layouts.plantilla')
@section('content')
<body class="bg-black">
        
<div class="row p-1 mb-0 bg-primary bg-gradient text-white p-1 text-center"><h5>VISTA DE FELINO</h5></div>
<div class="container">
    <div class="row p-0 mb-0 bg-warning bg-gradient text-black p-1 text-center"><h5 class="btn btn-warning">{{ $felino->especie }}</h5></div>
    <div class="row">
                <div class="col order-1 btn btn-success"><img src="{{ $felino->url }}" alt="" style="width:80%;"></div> 
                <div class="col order-2 btn btn-success">
                                <div class="row p-2 mb-4 justify-content-center">   
                                        <div class="col-4" >
                                                <label for="">ESPECIE</label>
                                                <input class="form-control" type="text" name="especie" value="{{ $felino->especie }}" readonly>
                                        </div>
                                </div>
                                <div class="row p-2 mb-4 justify-content-center">
                                        <div class="col-5">
                                                <label for="">CLASE</label>
                                                <input class="form-control" type="text" name="clase" value="{{ $felino->clase }}" readonly>
                                        </div>
                                        <div class="col-5">
                                                <label for="">ORDEN</label>
                                                <input class="form-control" type="text" name="orden" value="{{ $felino->orden }}" readonly>
                                        </div>
                                </div>
                                <div class="row p-2 mb-4 justify-content-center">
                                        <div class="col-5">
                                                <label for="">FAMILIA</label>
                                                <input class="form-control" type="text" name="familia" value="{{ $felino->familia }}" readonly>
                                        </div>
                                        <div class="col-5">
                                                <label for="">GENERO</label>
                                                <input class="form-control" name="genero" value="{{ $felino->genero }}" readonly>
                                        </div>
                                </div>
                                <div class="row p-2 mb-4 justify-content-center">
                                        
                                        <div class="col-5" >
                                                <label class="form-label">LONGEVIDAD</label>        
                                                <input class="form-control" name="longevidad" value="{{ $felino->longevidad }}" readonly>
                                                <span class="input-group-text">Años</span>
                                        </div>
                                        <div class="col-5">
                                            <label class="form-label">LONGITUD</label>
                                            <input class="form-control" name="longitud" value="{{ $felino->longitud }}" readonly>
                                            <span class="input-group-text">Metros</span>
                                        </div>
                                <div class="row p-2 mb-4 justify-content-evenly">
                                            
                                        
                                </div>
                                    <div class="row g-2 justify-content-center">
                                        <div class="col-4">
                                            <label class="form-label">PESO</label>        
                                            <input class="form-control" name="peso" value="{{ $felino->peso }}" readonly>
                                            <span class="input-group-text">Kilogramos</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 justify-content-end">
                                        <div class="col-5"><br>
                                                <div class="btn btn-warning"><a  class="navbar-brand"  href="{{ route('felinos.index') }}"> «Regresar al Inicio</a></div>  
                                        </div>
                                </div>        
                </div>
     </div>
     <div class="row" >
                        <details class="accordion-item bg-secondary bg-gradient text-white">
                                <summary class="fs-4">
                                          INFORMACION
                                </summary>
                                <div class="bg-light bg-gradient text-black" >
                                        <div class="accordion-body">{{ $felino->informacion }}</div>
                                </div>
                        </details>
                        <details class="accordion-item bg-secondary bg-gradient text-white">
                        <summary class="fs-4">
                        IMAGENES
                        </summary>
                        <div class="bg-primary bg-gradient text-white">
                                <div class="row accordion-body">
                                        <div class="col order-1 btn btn-outline-warning"><img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fglobalmediarocks.s3-us-west-1.amazonaws.com%2Fuploads%2F80023ba9-e110-4c86-9a58-3dd68aa65163%2Fleon2.jpg&f=1&nofb=1" alt="" style="width:100%;"></div>
                                        <div class="col order-2 btn btn-outline-warning"><img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F3.bp.blogspot.com%2F_MUuFqaxjSXs%2FS_2OsC37UzI%2FAAAAAAAAABA%2FvLsGovtEGCQ%2Fs1600%2Fleon_corriendo-1024x768-374734.jpg&f=1&nofb=1" alt="" style="width:100%;"></div>
                                        <div class="col order-2 btn btn-outline-warning"><img src="https://www.nationalgeographic.com.es/medio/2020/05/04/retrato-de-un-leon-macho-el-color-de-la-melena-del-leon-puede-ir-del-marron-claro-hasta-el-negro_d902479a_800x453.jpg" alt="" style="width:100%;"></div>
                                </div>                
                        </details> 
        </div>
        <div class="row">
                        <details class="accordion-item bg-secondary bg-gradient text-white">
                                <summary class="fs-4">
                                VIDEOS
                                </summary>
                                <div class="row accordion-body">
                                                <div class="col order-1 btn btn-outline-secondary">
                                                        <video controls width="600" height="400" >
                                                        <source src="https://www.nationalgeographic.com.es/medio/felinos/Leon_Interior_1280_570.mp4" type="video/mp4" >
                                                                <source src="https://www.nationalgeographic.com.es/medio/felinos/Leon_Interior_1280_570.webm" type="video/webm">
                                                        </video>
                                                </div>              
                                        <div class="col order-2 btn btn-outline-secondary">
                                                        <video controls width="600" height="400" >
                                                                <source src="https://www.nationalgeographic.com.es/medio/felinos/Leon_Interior_450_570.mp4" type="video/mp4">
                                                        </video>                                             
                                        </div>
                                </div>                
                        </details> 
        </div>
</div>
</body>
@endsection
