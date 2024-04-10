<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'telefono',
        'pais',
        'direccion',
    ];

    public function medicamentoProveedor()
    {
        return $this->hasMany(MedicamentoProveedor::class);
    }

    
}
