<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Venta;
use Illuminate\Validation\Rule;

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
        if($this->user()->es_paciente)
            return [
                'cantidad' => 'required',
                'precio_total' => 'required',
                'precio_unitario' => 'required|',
                'fecha_compra' => 'required|',
                'paciente_id' => ['required|'],
                'farmacia_id' => '',
                'medicamento_comercial_id' => 'required|'
            ];          
        return [
            'cantidad' => 'required',
            'precio_total' => 'required',
            'precio_unitario' => 'required|',
            'fecha_compra' => 'required|',
            'paciente_id' => 'required|',
            'farmacia_id' => '',
            'medicamento_comercial_id' => 'required|'
        ];
    }
}
