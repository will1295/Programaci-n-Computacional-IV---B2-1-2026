<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/holamundo',[Micontroller::class,'index']);
Route::get('/dashboard',[Micontroller::class,'dashboard']);
Route::get('/productos/index',[Micontroller::class,'mostrarproductos']);
Route::get('/info',[Micontroller::class,'info']);
Route::get('/datos',[MiController::class,'datos']);
Route::get('/verpr/{id}',[MiController::class,'verpr']);