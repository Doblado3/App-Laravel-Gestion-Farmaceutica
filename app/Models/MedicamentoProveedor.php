<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoProveedor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
}
