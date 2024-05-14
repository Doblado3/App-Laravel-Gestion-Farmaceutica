<?php

namespace App\Http\Requests;

use App\Models\Paciente;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $paciente = Paciente::find($this->route('paciente'))->first();
        return $paciente && $this->user()->can('update', $paciente);;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [ // - TODO
            'name' => 'required|string|max:255',
            'apellidos' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'dni' => ['required', 'string', 'unique:pacientes', new DNI],
            'nusha' => 'required|string|max:255|unique:pacientes',
        ];
    }
}
