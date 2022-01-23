<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonedaAUX extends Model
{
    use HasFactory;
    protected $table = 'monedasAUX';
    protected $primaryKey = 'idMoneda';



    protected $fillable =[
        'idMoneda',
        'breve',
        'descripcion',
        'predeterminado',
        'estado',
    ];
    public $timestamps = false;
}
