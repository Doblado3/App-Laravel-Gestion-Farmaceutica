<?php

namespace App\Http\Requests\Venta;

use App\Models\Venta;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Rule;

class UpdateVentaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $venta = Venta::find($this->route('venta'))->first();
        return $venta && $this->user()->can('update', $venta);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'fecha_compra' => 'required|date|before:yesterday',
                'paciente_id' => 'required|exists:pacientes,id',
                'cantidad_total' => 'required|numeric',
                'precio_total' => 'required|numeric',
                'farmacia_id' => 'exists:farmacias,id',           
            ];
    }
}
