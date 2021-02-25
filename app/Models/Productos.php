<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar modelos
use App\Models\Transaciones;

class Productos extends Model
{
    use HasFactory;

    //relaciones
    public function transacciones (){
        return $this->hasMany(Transaciones::class);
    }

}
