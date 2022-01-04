<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaPlan extends Model
{
    use HasFactory;
    protected $table = 'cuenta_plan';
    protected $primaryKey = 'idCuentaPlan';

    const ESTADO_ACTIVO = 1;
    const ESTADO_DESACTIVO = 0;

    protected $fillable =[
        'codigo',
        'descripcion',
        'estado',
        'idPlanCuentaPadre',
        'idCuentaPlanTipo',
    ];
    public $timestamps = false;
}
