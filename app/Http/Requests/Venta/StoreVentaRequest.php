<?php

namespace App\Http\Requests\Venta;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Venta;

class StoreVentaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create',Venta::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'precio_total' => 'required|numeric|min:0',
                'cantidad_total' => 'numeric|min:0',
                'fecha_compra' => 'required|date|before:yesterday',
                'paciente_id' => 'required|exists:pacientes,id',
                'farmacia_id' => 'exists:farmacias,id',
            ];
    }
}
