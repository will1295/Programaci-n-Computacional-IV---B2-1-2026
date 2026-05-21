<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function index(){
        $datos = [
            ['id'=>1, 'nombre'=>'Juan','apellido'=>'Perez'],
            ['id'=>2, 'nombre'=>'Luis','apellido'=>'Hernandez'],
            ['id'=>3, 'nombre'=>'Maria','apellido'=>'Sanchez'],
            ['id'=>4, 'nombre'=>'Ana','apellido'=>'Martinez'],
        ];
        return view('index',compact('datos'));
    }
}
