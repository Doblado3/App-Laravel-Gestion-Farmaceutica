<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFarmaciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $farmacia = Farmacia::find($this->route('farmacia'))->first();
        return $farmacia && $this->user()->can('update', $farmacia);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [ // - TODO
            'name' => 'requiered|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'email' => 'required|string|email|max:255', #|unique:?'
            'telefono' => 'required|numeric',
        ];
    }
}
