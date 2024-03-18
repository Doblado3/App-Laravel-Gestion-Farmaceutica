<?php

namespace App\Http\Requests;

use App\Models\Paciente;
use Illuminate\Foundation\Http\FormRequest;

class StorePacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', Paciente::class);
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
            'dni' => 'required|string|max:255|unique:pacientes',
            'password' => 'required|string|confirmed|min:8',
            'nusha' => 'required|string|max:255|unique:pacientes',
        ];
    }
}
