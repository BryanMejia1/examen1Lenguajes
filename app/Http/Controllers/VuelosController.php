<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vuelo;

class VuelosController extends Controller
{
    public function inicio(){
        return view("inicio");
    }

    public function vuelos(){
        $vuelos = Vuelo::all();
        return view("vuelos", compact("vuelos"));
    }

    public function agregar(){
        return view("nuevoVuelo");
    }

    public function guardar(Request $request){
        $vuelos = new Vuelo();
        $vuelos->numeroVuelo = $request->input('numeroVuelo');
        $vuelos->origen = $request->input('origen');
        $vuelos->destino = $request->input('destino');
        $vuelos->fechadesalida = $request->input('fechaVuelo');
        $vuelos->numeroAsientos = $request->input('cantidadAsiento');
        $vuelos->save();
       
        }

    public function editarVuelo($codigo){
        $vuelo = Vuelo::find($codigo);
        return view('editarVuelo', compact('vuelo'));
    }

    public function guardarEditado(){
        echo "hola";
    }
    
    public function eliminar($codigo){
        $vuelo = Vuelo::find($codigo);
        $vuelo->delete();
    }



}