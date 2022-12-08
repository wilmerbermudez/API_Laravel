<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompradorRequest extends FormRequest
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
            'tipo_doc' => "required",
            'documento' => "required|unique:comprador,documento,".$this->route('comprador')->id,
            'nombre' => "required",
            'apellido' => "required",
            'correo' => "required",
            'telefono' => "required",
            'direccion' => "required"
        ];
    }
}
