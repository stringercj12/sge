<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'rg',
        'sexo',
        'nascimento',
        'celular',
        'residencial',
        'image',
        'tipoUsuario',
        'status',
        'acesso',
        'observacao',
        'rua',
        'numero',
        'complemento',
        'cep',
        'bairro',
        'cidade',
        'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   public function Curso()
   {
       return $this->hasOne(Cursos::class, 'user', 'id');
   }

   public function Protocolo()
   {
       return $this->hasMany(Protocolos::class, 'user', 'id');
   }


    public function Address(){
        return $this->hasOne(Address::class, 'user', 'id');
    }

    public function relEmail(){
        return $this->hasMany('App\Email', 'user_id');
    }
}
