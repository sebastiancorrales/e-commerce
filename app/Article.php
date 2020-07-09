<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'categoria',
        'nombre_persona', 
        'nombre_articulo', 
        'descripcion',
        'valor_envio',
        'fecha_entrega',
        'direccion_destino',
        'telefono',
        'email',
        'estado',
        'sucursal'
    ];
    public function sucursal(){
        return $this->belongsTo('App\Sucursal');
    }
}
