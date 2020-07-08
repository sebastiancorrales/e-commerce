<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $fillable = [
        'direccion',
        'nombre',
        'telefono',
        'horarios'
    ];

    public function Article(){
        return $this->hasMany('App\Article');
    }
}
