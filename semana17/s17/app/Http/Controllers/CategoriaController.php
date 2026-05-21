<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categorias::all();
        return view('categorias.index',compact('categorias'));
    }
}
