<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoProveedor extends Model
{
    protected $fillable = [
        'precio',
        'cantidad',
        
    ];

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function farmacias()
    {
        return $this->belongsToMany(Farmacia::class)->using(LineaCompra::class)->withPivot('precio_unidad','cantidad','fecha_compra');
    }

}
