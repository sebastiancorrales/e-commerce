<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'categoria'        => 'required|string|max:191',
            'nombre_persona'   => 'max:191',
            'nombre_articulo'  => 'required|string|max:191',
            'descripcion'      => 'required|string|max:191',
            'valor_envio'      => 'required|numeric',
            'fecha_entrega'    => 'required|date|date_format:Y-m-d',
            'telefono'         => 'required|string|max:10',
            'email'            => 'required|email',
            'direccion_destino'=> 'required|string|max:191',
            'estado'           => 'required|string|max:191',
            'sucursal'         => 'required|string',
        ];
    }
}
