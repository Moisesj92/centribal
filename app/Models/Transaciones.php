<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar modelos
use App\Models\User;
use App\Models\Productos;

class Transaciones extends Model
{
    use HasFactory;

    //Relaciones
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function producto() {
        return $this->belongsTo(Productos::class);
    }

}
