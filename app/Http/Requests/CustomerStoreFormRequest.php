<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreFormRequest extends FormRequest
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

            'name'          => 'required|string|min:3',
            'cpf'           => 'required',
            'photo'         => 'required',
            'gender'        => 'required|string',

            // Address
            'zip_code'      => 'required',
            'address'       => 'required|string|min:3',
            'number'        => 'required',
            'complement'    => 'nullable|string|min:3',
            'neighborhood'  => 'required|string|min:3',
            'city'          => 'required|string|min:3',
            'state'         => 'required|string|min:3'

        ]; // return

    } // rules

} //
