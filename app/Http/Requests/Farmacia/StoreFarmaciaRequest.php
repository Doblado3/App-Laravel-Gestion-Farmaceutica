<?php

namespace App\Http\Requests;

use App\Models\Farmacia;
use Illuminate\Foundation\Http\FormRequest;

class StoreFarmaciaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', Farmacia::class);
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
