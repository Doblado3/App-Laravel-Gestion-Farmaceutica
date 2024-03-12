<?php

namespace App\Http\Requests\Farmaceutico;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFarmaceuticoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $farmaceutico = Farmaceutico::find(($this->route('farmaceutico'))->first());
        return $farmaceutico && $this->user()->can('update', $farmaceutico);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'dni' => 'required|string|max:255',
            'fecha_contratacion' => 'required|date',
            'sueldo' => 'required|numeric',
            'farmacia_id' => 'required|exists:farmacias,id'
        ];
    }
}
