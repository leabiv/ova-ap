<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    public function createTema(){
        return view('createTema');
    }

    public function store(Request $request){
        $tema = new Tema();

        $tema->num_unidad = $request->num_unidad;
        $tema->nombre_Tema = $request->nombre_Tema;
        $tema->descripcion_Tema = $request->descripcion_Tema;
        $tema->imagen = $request->imagen;
        $tema->url_video = $request->url_video;

        $tema->save();
        return redirect()->route('temas.create');
    }

    public function listarTemas(){
        
        $listTemas = DB::table('temas')->get();
        $listUnidad = DB::table('unidads')->get();

        return view('lisTemas',compact('listTemas','listUnidad'));
    }

    public function informacionTema($id){
        $tema = Tema::find($id);
        return view('informationTema', compact('tema'));
    }
}
