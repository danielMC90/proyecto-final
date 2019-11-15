<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarPersonaRequest extends FormRequest
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
        // añadimos reglas
        return [
            'nombres' => 'required|min:2|max:20',
            'apPaterno' => 'required|min:2|max:30',
            'apMaterno' => 'required|min:2|max:30',
            'ci' => 'required|min:7|max:10|unique:tbl_persona,ci',
            'telefono' => 'required|min:8|max:12',
            // 'correo' => 'required|min:1|max:50',
            'direccion' => 'required|min:1|max:250',
        ];
    }
    public function messages()
    {
        return [
            'nombres.required' => 'ha intentado guardar el :attribute vacio ',
            'nombres.min' => 'El :attribute debe contener mínimo 1 caracter',
            'nombres.max' => 'El :attribute excede el valor definido',

            'apPaterno.required' => 'ha intentado guardar el :attribute vacio ',
            'apPaterno.min' => 'El :attribute debe contener mínimo 1 caracter',
            'apPaterno.max' => 'El :attribute excede el valor definido',

            'apMaterno.required' => 'ha intentado guardar el :attribute vacio ',
            'apMaterno.min' => 'El :attribute debe contener mínimo 1 caracter',
            'apMaterno.max' => 'El :attribute excede el valor definido',

            'ci.required' => 'El :attribute es obligatorio',
            'ci.min' => 'El :attribute debe contener al menos 7 caracter',
            'ci.max' => 'El :attribute excede el valor definido',

            'telefono.required' => 'El :attribute debe contener mínimo 8 numeros',
            'telefono.min' => 'El :attribute debe contener mínimo 1 caracter',
            'telefono.max' => 'El :attribute excede el valor definido',

            'direccion.required' => 'El :attribute es obligatorio',
            'direccion.min' => 'El :attribute debe contener mínimo 1 caracter',
            'direccion.max' => 'El :attribute excede el valor definido',

        ];
    }
    public function attributes()
    {
        return [
            'nombres' => 'nombres',
            'apPaterno' => 'apellido paterno',
            'apMaterno' => 'apellido materno',
            'ci' => 'cedula de identidad',
            'telefono' => 'numero de telefono',
            // 'correo' => 'correo electronico',
            'direccion' => 'direccion de domicilio',
        ];
    }
}
