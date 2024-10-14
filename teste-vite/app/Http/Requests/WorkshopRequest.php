<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class WorkshopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

           
       
       
       
            //dados da empresa

           
            'email' => 'email',
            'cnpj' => 'required|string',
            'descricao_situacao_cadastral' => 'required|string',
            'cnae_fiscal_descricao' => 'required|string',
            'razao_social' => 'required|string',
            'phone_number' => 'string',
            'responsavel' => ' string',
            'workshop_id' => 'required|numeric',
        



            // dados endereço
           
            'state' => 'required| string',
            'city' => 'required| string',
            'street' => 'required| string',
            'neighborhood' =>'required| string',
            'cep' => 'required',
            'number' => 'nullable|numeric',
            'complement' => 'nullable',

        ];
    }

    public function messages(): array
    {
        return[
            'cnpj.required' => 'Campo CNPJ é obrigatório!',
            'descricao_situacao_cadastral.required' => 'Campo situação é obrigatório!',
            'cnae_fiscal_descricao.required' => 'Campo nome fantasia é obrigatório!',
            'email.required' => 'Campo e-mail é obrigatório!',
            'phone_number.required' => 'Campo telefone é obrigatório!',
            'responsavel.required' => 'Campo responsável é obrigatório!',
             'state.required' => 'Selecione um Estado',
             'city.required' => 'Selecione uma Cidade',
            'neighborhood.required' => 'Campo bairro é obrigatório!',
            'cep.required' => 'Campo cep é obrigatório!',
            'street.required' => 'Campo endereço é obrigatório!',
           
        ];
    }
}