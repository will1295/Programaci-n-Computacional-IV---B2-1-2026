<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function index(){
        $nombre = "Pepito";
        return view('ejemplo',compact('nombre'));
    }
}
