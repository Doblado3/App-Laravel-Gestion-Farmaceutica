<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio_publico',
        'laboratorio_fabricante',
        'descripcion',
        'prescripcion',
        'formula_componente_activo',
        'imagen_path',
        'refrigerado',
    ];

    protected $casts = [
        'prescripcion' => 'boolean',
        'refrigerado'  => 'boolean',
    ];

    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
    }
}
