<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;

class TipoAsientosController extends Controller
{
    public function tiposAsientos(){
        return view("tiposAsientos");
    }

    public function agregar(){
        return view("agregarTipoAsiento");
    }

    public function guardar(Request $request){
        $tipoAsientos = new TipoAsiento;

        $tipoAsientos->descripcion = $request->input('descripcion');
        $tipoAsientos->precio = $request->input('precio');
        $tipoAsientos->estado = $request->input('estado');
        $tipoAsientos->save();

        return redirect('/tiposAsientos/agregarTipoAsientos');
    }

}
