<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = [
        'nombre_comercial',
        'laboratorio',
        'componente_activo',
        'receta',
        'fecha_expiracion',
        'dosis',
        'forma_id',
    ];

    protected $casts = [
        'fecha_expiracion' => 'datetime:Y-m-d'
    ];

    public function ventas()
    {
        return $this->belongsToMany(Venta::class)->using(LineaVenta::class)->withPivot('precio_unidad','cantidad','fecha_compra');
    }

    public function medicamento_proveedor()
    {
        return $this->hashOne(MedicamentoProveedor::class);
    }

    public function forma()
    {
        return $this->belongsTo(Forma::class);
    }
}
