<?php

namespace App\Http\Controllers;

use App\Models\directorio;
use Illuminate\Http\Request;

class directorioController extends Controller
{
    public function mostrarTodos(){
        $directorios = directorio::all();
        return view('directorio', compact($directorios));
    }

    public function agregarDirectorio(){
        return view('crearEntrada');
    }

    public function salvarDirectorio(Request $req){
            $directorio = new directorio();
            $directorio->codigoEntrada = $req->codigoEntrada;
            $directorio->nombre = $req->nombre;
            $directorio->apellido = $req->apellido;
            $directorio->correo = $req->correo;
            $directorio->telefono = $req->telefono;
            $directorio->save();

            redirect(route('/'));
    }

    public function eliminarDirectorio($id){
        return view('eliminar');
    }

    public function confirmarEliminarDirec($id){
            $directorio = directorio::find($id);
            $directorio->delete();

            redirect('/');
    }
    public function buscarCorreo($correo){
        $directorio = directorio::where('correo',$correo);
        return (compact($directorio));
    }
}
