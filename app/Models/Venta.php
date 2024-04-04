<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

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
