<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoFarmacia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'unidades_disponibles',
        'laboratorio_fabricante',
        'descripcion',
        'precio_publico',
        'precio_descontado',
        'prescripcion',
        'formula_componente_activo',
        'refrigerado',
    ];

    protected $casts = [
        'prescripcion' => 'boolean',
        'refrigerado'  => 'boolean',
    ];
}
