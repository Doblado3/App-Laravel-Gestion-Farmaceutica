<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoCientifico extends Model
{
    use HasFactory;

    public function naturaleza()
    {
        return $this->belongsTo(Naturaleza::class);
    }
}
