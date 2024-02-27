<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Naturaleza extends Model
{
    use HasFactory;

    public function medicamento_farmacia()
    {
        return $this->hasMany(MedicamentoFarmacia::class);
    }

    public function medicamento_proveedor()
    {
        return $this->hasMany(MedicamentoProveedor::class);
    }

}
