<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\CorreoMailable;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function index(){
        return view('correos.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new CorreoMailable($request->all());
        Mail::to('leabiv@gmail.com')->send($correo);
       
        return redirect()->route('correo.index')->with('info', 'Mensaje Enviado');
    }
}
