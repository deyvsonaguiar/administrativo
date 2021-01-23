<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'tipo' => ['required', Rule::in(['cliente', 'fornecedor'])],
            'nome' => 'required|min:3|max:255',
            'razao_social' => ['max:255'],
            'documento' => $this->tipoValidacaoDocumento(),
            'ie_rg'  => ['required'],
            'contato' => ['required','max:255'],
            'celular' => 'required|size:11',
            'email' => ['required', 'email'],
            'telefone' => 'size:10',
            'cep' => 'required|size:8',
            'logradouro' => ['required', 'min:3', 'max:255'],
            'bairro' => ['required','max:50'],
            'cidade' => ['required','max:50'],
            'estado' => ['required','size:2'],
            'observacao'
        ];
    }

    //sobrescrevendo os campos para limpar as máscaras
    public function validationData()
    {

        $campo = $this->all();

        $campo['documento'] = str_replace(['.', ',', '/','-'], '', $campo['documento']);
        $campo['celular'] = \str_replace(['(', ')', ' ','.', ',', '/','-'], '', $campo['celular']);
        $campo['telefone'] = str_replace(['(', ')', ' ','.', ',', '/','-'], '', $campo['telefone']);
        $campo['cep'] = str_replace([' ','.', ',', '/','-'], '', $campo['cep']);

        $this->replace($campo);

        return $campo;
    }

    /**
     * Retorna o tipo de validação baseado no tamanho do campo documento
     *
     * @return void
     */
    private function tipoValidacaoDocumento()
    {
        if(strlen($this->documento) === 11) {
            return ['required', 'cnpj'];
        }

        return ['required', 'cpf'];
    }
}
