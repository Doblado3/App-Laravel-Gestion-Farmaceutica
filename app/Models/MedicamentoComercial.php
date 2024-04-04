<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoComercial extends Model
{

    protected $fillable = [
        'nombre',
    ];

    public function venta()
    {
        return $this->hashMany(Venta::class);
    }
}
