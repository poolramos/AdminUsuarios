<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return Usuario::all();
    }

    public function show($id){
        return Usuario::find($id);
    }

    public function store(Request $request){
        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->lastName = $request->lastName;
        $usuario->email = $request->email;
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->save();

        return "Usuario guardado de forma correcta";
    }

    public function update(Request $request,$id){
        $usuario = Usuario::find($id);
        $usuario->name = $request->name;
        $usuario->lastName = $request->lastName;
        $usuario->email = $request->email;
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->save();

        return "Usuario actualizado de forma correcta";
    }

    public function delete($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        
        return "Usuario eliminado de forma correcta";
    }
}
