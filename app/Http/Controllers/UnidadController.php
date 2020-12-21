<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidad;

class UnidadController extends Controller
{
    public function listUnidad(){
        $unidades = Unidad::paginate();
        return view('listUnidad', compact('unidades'));
    }

    public function informationUnidad($id){
        $unidades = Unidad::find($id);
        return view('informationUnidad', compact('unidades'));
    }

    public function createUnidad(){
        return view('createUnidad');
    }

    public function store(Request $request){

        $request->validate([
            'nombreUnidad' => 'required',
            'descripUnidad' => 'required',
            'url_video' => 'required',
            'id_Tema' => 'required'
        ]);

        $unidades = Unidad::create($request->all());

        return redirect()->route('unidades.information', $unidades->id);
      
        }

    public function modifyUnidad(Unidad $unidad){
        return view('modifyUnidad', compact('unidad'));
    }

    public function update(Request $request, Unidad $unidad){
        $request->validate([
            'nombreUnidad' => 'required',
            'descripUnidad' => 'required',
            'url_video' => 'required',
            'id_Tema' => 'required'
        ]);
  
        $unidad -> update($request->all());

        return redirect()->route('unidades.information', $unidad->id);
        }

        public function destroy(Unidad $unidad){
            $unidad->delete();
            return redirect()->route('unidades.list');
        }
}
