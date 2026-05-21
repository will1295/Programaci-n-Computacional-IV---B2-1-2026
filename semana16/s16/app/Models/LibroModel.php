<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibroModel extends Model
{
    protected $table = 'tbllibros';
    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'genero',
        'fpublicacion'
    ];
}
