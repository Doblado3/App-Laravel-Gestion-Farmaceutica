<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ubicacion',
        'nombre',
        'email',
        'telefono',
    ];


   

    public function venta()
    {
        return $this->hasMany(Venta::class);
    }

    public function farmaceutico()
    {
        return $this->hasMany(Farmaceutico::class);
    }

    public function medicamentos()
    {
        return $this->belongsToMany(MedicamentoProveedor::class)->using(LineaCompra::class)->withPivot('precio_unidad','cantidad','fecha_compra');
    }

    
}
