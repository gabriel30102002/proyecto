<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    Use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];



    
}
