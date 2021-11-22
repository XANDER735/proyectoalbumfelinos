<?php

namespace App\Http\Controllers;
use App\Models\felino;
use Illuminate\Http\Request;

class FelinoController extends Controller
{
    //pagina inicial 
    public function index(){
        //$felinos = felino::all();
        //return $felinos;
        $felinos= felino::toBase()->get();
        return view('felinos.index', compact('felinos'));
    }

    public function crear(){
        return view('felinos.crear');
    }
    public function guardar(Request $request){
        //intercepta el flujo insercion
        $request->validate([
            'especie' => 'required',
            'clase' => 'required',
            'orden' => 'required',
            'familia' => 'required',
            'genero' => 'required',
            'longevidad' => 'required',
            'longitud' => 'required',
            'peso' => 'required',
            'informacion' => 'required',
            'url' => 'required'
        ]);

        $newfelino = new felino();

        $newfelino->especie = $request->especie;
        $newfelino->clase = $request->clase;
        $newfelino->orden = $request->orden;
        $newfelino->familia = $request->familia;
        $newfelino->genero = $request->genero;
        $newfelino->longevidad = $request->longevidad;
        $newfelino->longitud = $request->longitud;
        $newfelino->peso = $request->peso;
        $newfelino->informacion = $request->informacion;
        $newfelino->url = $request->url;

        $newfelino->save();
        
        return redirect()-> route('felinos.index');
    }

    public function ver(felino $felino){
        //$felino = felino::find($especie);

        return view('felinos.ver', compact('felino'));
    }

    public function editar(felino $felino){

        return view('felinos.editar',compact('felino'));
        //$felino = felino::find($felino);
        //return $felino;
    }

    public function actualizar(Request $request, felino $felino){
        $felino->especie = $request->especie;
        $felino->clase = $request->clase;
        $felino->orden = $request->orden;
        $felino->familia = $request->familia;
        $felino->genero = $request->genero;
        $felino->longevidad = $request->longevidad;
        $felino->longitud = $request->longitud;
        $felino->peso = $request->peso;
        $felino->informacion = $request->informacion;
        $felino->url = $request->url;

        $felino->save();
        
        return redirect()->route('felinos.ver', $felino);
        
    }

    public function eliminar(felino $felino){
        $felino->delete();
        $this->mensaje('message',' Felino Eliminado Correctamente ');
        return redirect()->back();
    }
    public function mensaje(string $felino = null, string $mensaje = null)
    {
        return session()->flash($felino,$mensaje);
    }
}
