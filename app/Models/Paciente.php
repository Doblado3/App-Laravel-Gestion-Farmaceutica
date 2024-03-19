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
    ];


    
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function venta()
    {
        return $this->hasMany(Venta::class);
    }

    public function farmacia(){
        return $this->hasManyThrough(Farmacia::class, Venta::class);
    }

   
    
}
