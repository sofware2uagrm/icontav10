<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    // agregago por lucas pa ayudar a nicolas
    public function limpiarEMPRESA(){
        //CONSULTA para eliminar todo:
        $this->truncate();
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
