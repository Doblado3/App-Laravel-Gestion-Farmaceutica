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
        if($this->user()->es_farmaceutico)
            return [
                'cantidad' => 'required|double|min:0',
                'precio_total' => 'required|double|min:0',
                'precio_unitario' => 'required|double|min:0',
                'fecha_compra' => 'required|date|after:yesterday',
                'paciente_id' => ['required', 'exists:pacientes,id', Rule::in($this->user()->paciente->id)],
                'farmacia_id' => 'required|exists:farmacia,id',
                'medicamento_comercial_id' => 'required|exists:medicamentos_comerciales,id' //medicamentos_comerciales se escribe asi?
            ];
        return [
            'cantidad' => 'required|double|min:0',
            'precio_total' => 'required|double|min:0',
            'precio_unitario' => 'required|double|min:0|',
            'fecha_compra' => 'required|date|after:yesterday',
            'paciente_id' => 'required|exists:pacientes,id',
            'farmacia_id' => 'required|exists:farmacia,id',
            'medicamento_comercial_id' => 'required|exists:medicamentos_comerciales,id' //medicamentos_comerciales se escribe asi?
        ];
    }
}
