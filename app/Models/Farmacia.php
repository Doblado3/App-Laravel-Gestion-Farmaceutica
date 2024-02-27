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
        'horarios',
        'telefono',
        'guardias',
    ];

    public function farmacia()
    {
        return $this->hasOne(Farmacia::class);
    }
}
