<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'descripcion',
    ];
}
