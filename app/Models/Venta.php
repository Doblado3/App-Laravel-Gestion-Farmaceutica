<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
    }

    public function medicamentoComercial()
    {
        return $this->belongsTo(MedicamentoComercial::class);
    }
}
