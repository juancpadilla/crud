<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class pagecontroller extends Controller
{
    public function inicio (){
        $bd = App\usuario::all();
        return view('welcome', compact('bd'));
    }

    public function detalle($id){
        $bd = App\usuario::findOrFail($id);
        return view('usuario.detalle', compact('bd'));
    }

    public function crear(Request $bd){

         $bd -> validate([
            'nombre' => 'required',
            'descrip' => 'required'


         ]);

        $datos=  new App\usuario;
        $datos -> nombre = $bd ->nombre;
        $datos -> descripcion = $bd ->descrip;
        
        $datos -> save();
        return back() -> with('mensaje', 'El usuario fue añadido corectamente');

    }

    public function edit($id){
        $bd = App\usuario::findOrFail($id);

        return view('usuario.editar', compact('bd'));

    }
    public function up(Request $bd, $id){
        $datos = App\usuario::findOrFail($id);
        $datos -> nombre = $bd ->nombre;
        $datos -> descripcion = $bd ->descrip;
        $datos -> save();
        return back() -> with('mensaje', 'El usuario fue Editado corectamente');
    }

    public function eliminar($id){
        $datos = App\usuario::findOrFail($id);
        $datos ->delete();
        return back() -> with('mensaje2', 'El usuario fue Elimnado corectamente');
    }

}
