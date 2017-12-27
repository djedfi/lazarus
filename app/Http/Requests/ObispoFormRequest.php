<?php

namespace Lazarus\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObispoFormRequest extends FormRequest
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
            'txtNombre'=>'required|max:150',
            'txtDesde'=>'required|max:4',
            'txtHasta'=>'required|max:4',
            'txtMostrar'=>'required|max:300'
        ];
    }

    public function messages()
    {
        return [
            'txtNombre.required' => 'El nombre es requerido',
            'txtDesde.max'  => 'El año de inicio debe tener 4 caracteres como máximo.',
            'txtDesde.required'  => 'El año de inicio es requerido',
            'txtHasta.max'  => 'El año de finalizacion debe tener 4 caracteres como máximo.',
            'txtHasta.required'  => 'El año de finalizacion es requerido',
            'txtMostrar.required'  => 'El nombre para mostrar en acta es necesario',
        ];
    }
}
