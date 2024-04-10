<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'apellidos',
        'email',
        'password',
        'genero',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function farmaceutico()
    {
        return $this->hasOne(Farmaceutico::class);
    }

    public function getTipoUsuarioIdAttribute(){
        if ($this->farmaceutico()->exists()){
            return 1;
        }elseif($this->paciente()->exists()){
            return 2;
        }else{
            return 3;
        }
    }

    public function getTipoUsuarioAttribute(){
        $tipos_usuario = [1=>trans('Farmacéutico'), 2=> trans('Paciente'), 3=> trans('Administrador')];
        return $tipos_usuario[$this->tipo_usuario_id];
    }

    public function getEsFarmaceuticoAttribute(){
        return $this->tipo_usuario_id == 1;
    }

    public function getEsPacienteAttribute(){
        return $this->tipo_usuario_id == 2;
    }

    public function getEsAdministradorAttribute(){
        return $this->tipo_usuario_id == 3;
    }
}
