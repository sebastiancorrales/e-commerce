<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'categoria',
        'nombre', 
        'descripcion',
        'precio',
        'valor_envio',
        'fecha_envio',
        'direccion_envio',
        'direccion_destino',
        'sucursal'
    ];
    public function sucursal(){
        return $this->belongsTo('App\Sucursal');
    }
}
