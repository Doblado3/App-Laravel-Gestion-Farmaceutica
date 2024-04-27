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
    ];

    protected $casts = [
        'fecha_contratacion' => 'datetime:Y-m-d'
    ];

    protected $hidden = [
        'user', //Laravel muestra todo el user al hacer lo de abajo
    ];

    protected $appends = [
        'Nombre',
        'Apellidos',
        'Email',
        'Genero',
    ]; //Appends es para poder pasarle al index de farmacéuticos de React los datos de User, sin necesidad de pasarle todo el modelo


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

    public function getNombreAttribute()
    {
        return $this->user->name;
    }

    public function getApellidosAttribute()
    {
        return $this->user->apellidos;
    }

    public function getEmailAttribute()
    {
        return $this->user->email;
    }

    public function getGeneroAttribute()
    {
        return $this->user->genero;
    }






}
