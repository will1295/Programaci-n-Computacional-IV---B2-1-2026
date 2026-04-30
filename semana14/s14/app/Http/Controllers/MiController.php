<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{
    public function index(){
        return ('Esto es un controlador');
    }

    public function dashboard(){
        //1-EL nombre de la view a llamar
        //2-El dato que queremos pasa a la respectiva view
        return view('dashboard');
    }

    public function mostrarproductos(){
        return view('productos.index');
    }

    public function info(){
        $nombre = 'Juanito Perez';
        return view('info',compact('nombre'));
    }

    public function datos(){
        $query = [
            ["id"=>1,'nombre'=>'juan perez','edad'=>20],
            ["id"=>2,'nombre'=>'ana maria','edad'=>18],
            ["id"=>3,'nombre'=>'pedro sanchez','edad'=>21],
            ["id"=>4,'nombre'=>'maria julia','edad'=>22],
        ];
        return view('datos',compact('query'));
    }

    private $listap = [
            ["id"=>1,'nombre'=>'aceite','precio'=>1.20],
            ["id"=>2,'nombre'=>'sal','precio'=>0.30],
            ["id"=>3,'nombre'=>'leche','precio'=>2.10],
            ["id"=>4,'nombre'=>'azucar','precio'=>0.40],
        ];

    public function verpr($id){
        $producto = $this->listap[$id-1];
        return view('verpr',compact('producto'));
    }


}

