<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibroModel;

class LibroController extends Controller
{
    public function index(){
        $libros = LibroModel::all();
        return view ('index',compact('libros'));
    }

    //Agregar la funcion de insertar datos
}
