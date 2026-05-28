<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/productos',[ProductoController::class,'index']);
Route::get('/clientes',[ClienteController::class,'index']);
Route::post('/clientes',[ClienteController::class,'store']);