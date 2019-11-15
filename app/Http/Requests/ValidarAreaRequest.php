<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarAreaRequest extends FormRequest
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
            'nombre' => 'required|min:5|max:30|unique:tbl_area,nombre',
           
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'ha intentado guardar el :attribute vacio ',
            'nombre.min' => 'El :attribute debe contener mínimo 5 caracter',
            'nombre.max' => 'El :attribute excede el valor definido',
        ];
    }
    public function attributes()
    {
        return [
            'nombre' => 'area del departamento',
        ];
    }
}
