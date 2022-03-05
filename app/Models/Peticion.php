<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "peticion";
    protected $fillable =[
        'id_registro',
        'fecha',

];
}
