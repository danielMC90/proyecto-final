<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarSoporteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // true nos permite usar este request de valiacion
    }

    public function rules()
    {
        // añadimos reglas
        return [
            'idPersonal' => 'required|not_in:0',
            'idTipoSoporte' => 'required|not_in:0',
            'asunto' => 'required|min:1|max:100',
            'procesos' => 'required|min:1',
            'resolucion' => 'required|min:1',
            'recomendacion' => 'required|min:1',
            
            
        ];
    }
    public function messages()
    {
        return [
            'idPersonal.required' => 'no seleccionado ninguna :attribute',
            
            'idTipoSoporte.required' => 'no seleccionado ningun :attribute',
            

            'asunto.required' => 'ha intentado guardar el :attribute vacio ',
            'asunto.min' => 'El :attribute debe contener mínimo 1 caracter',
            'asunto.max' => 'El :attribute excede el valor definido max: 100',

            'procesos.required' => 'El :attribute es obligatorio',
            'procesos.min' => 'El :attribute debe contener al menos 7 caracter',
            'procesos.max' => 'El :attribute excede el valor definido',

            'resolucion.required' => 'El :attribute debe contener mínimo 8 numeros',
            'resolucion.min' => 'El :attribute debe contener mínimo 1 caracter',
            'resolucion.max' => 'El :attribute excede el valor definido',

            'recomendacion.required' => 'El :attribute es obligatorio',
            'recomendacion.min' => 'El :attribute debe contener mínimo 1 caracter',
            'recomendacion.max' => 'El :attribute excede el valor definido',        ];
    }
    public function attributes()
    {
        return [
            'idPersonal' => 'personal',
            'idTipoSoporte' => 'Tipo de Soporte',
            'asunto' => 'Asunto del Soporte o Referencia',
            'procesos' => 'Procesos del Soporte realizado',
            'resolucion' => 'Resolucion del Soporte',
            'recomendacion' => 'Recomendacion del Soporte',
        ];
    }
}
