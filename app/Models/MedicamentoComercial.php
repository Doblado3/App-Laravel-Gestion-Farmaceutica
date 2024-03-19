<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoComercial extends Model
{
    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function venta()
    {
        return $this->hasMany(Venta::class);
    }
}
