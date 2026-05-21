<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Productos extends Model
{
    public function categoria():BelongsTo{
        return $this->belongsTo(Categorias::class);
    }

}
