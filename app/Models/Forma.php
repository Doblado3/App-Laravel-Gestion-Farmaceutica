<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forma extends Model
{
    protected $fillable = ['nombre'];

    public function medicamentos()
    {
        return $this->hasMany(Medicamento::class);
    }
}
