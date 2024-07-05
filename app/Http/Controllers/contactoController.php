<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function agregarContacto(){
        return view('agregarcontacto');
    }

    public function salvarContacto(Request $req){
        $contact = new contacto();
        $contact->codigoEntrada = $req->codigoEntrada;
        $contact->nombre = $req->nombre;
        $contact->apellido = $req->apellido;
        $contact->correo = $req->correo;
        $contact->save();
        redirect(route('/diretorios'));
    }
    public function eliminarContacto($id){
        $contactoElim = contacto::find($id);
        return view('eliminar', compact( $contactoElim ));
    }

    public function confirmarEliminarContact(Request $req, $id){
            $contacto = contacto::find($id);
            $contacto->delete();

            redirect('/directorios');
    }

    public function verContacto(){
        $contactos = contacto::all();
        return view('vercontactos', compact($contactos));
    }
    public function verInfo($id){
        $contacto = contacto::find($id);
        return view('vercontactos',compact('contacto'));
    }

    public function infoContarto($id){
            $contacto = contacto::find($id);
            return view('vercontactos', compact($id));
    }
}