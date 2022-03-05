<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "producto";
    protected $fillable =[

        'id_producto',
        'nombre_producto',
        'descripcion',
        'precio',
        'estado',
        'fecha_publicacion'
];
}
