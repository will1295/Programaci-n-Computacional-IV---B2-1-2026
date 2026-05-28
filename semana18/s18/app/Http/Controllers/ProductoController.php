<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = [
            ["id"=>1,"nombre","Laptop","precio"=>1200],
            ["id"=>2,"nombre","Mouse","precio"=>25]
        ];
        return response()->json($productos);
    }
}
