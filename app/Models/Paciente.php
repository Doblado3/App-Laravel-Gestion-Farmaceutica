<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dni',
        'nusha',
        'fecha_nacimiento',
    ];

    protected $casts = [
        'fecha_nacimiento' => 'datetime:Y-m-d'
    ];


    
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function venta(){
        return $this->hashMany(Venta::class);
    }

   
    
}
