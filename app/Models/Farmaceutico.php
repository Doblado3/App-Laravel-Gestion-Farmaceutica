<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Farmaceutico extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dni',
        'fecha_contratacion',
        'sueldo',
        'farmacia_id',
    ];

    protected $casts = [
        'fecha_contratacion' => 'datetime:Y-m-d'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function farmacia()
    {
        return $this->belongsTo(Farmacia::class);
    }

    public function getDiasContratadoAttribute()
    {
        return Carbon::now()->diffInDays($this->fecha_contratacion);
    }






}
