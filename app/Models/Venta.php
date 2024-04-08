<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

    protected $fillable = [
        'cantidad',
        'precio_unitario',
        'precio_total',
        'fecha_compra',
        'medicamento_comercial_id',
    ];

    protected $casts = [
        'fecha_compra' => 'datetime:Y-m-d'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
    }

    public function medicamento_comercial()
    {
        return $this->belongsTo(MedicamentoComercial::class);
    }
}
