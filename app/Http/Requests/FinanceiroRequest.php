<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FinanceiroRequest extends FormRequest
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
            'descricao' => 'required|string|max:255',
            'date' => 'date',
            'valor' => 'required|numeric',
            'tipo' => 'required',
            'empresa_id' => 'required'
        ];
    }

    //sobrescrevendo os campos para limpar as máscaras
    public function validationData()
    {

        $campo = $this->all();

        $campo['valor'] = numero_br_para_iso($campo['valor']);
        $campo['data'] = data_br_para_iso($campo['data']);


        $this->replace($campo);

        return $campo;
    }

}
