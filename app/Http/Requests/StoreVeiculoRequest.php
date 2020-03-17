<?php

namespace FederalSt\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVeiculoRequest extends FormRequest
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
            'placa' => 'required|min:7',
            'renavam' => 'required',
            'modelo' => 'required|min:2',
            'marca' => 'required|min:3',
            'ano' => 'required|min:4',
        ];
    }
}
