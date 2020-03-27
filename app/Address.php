<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user',
        'rua',
        'numero',
        'complemento',
        'cep',
        'bairro',
        'cidade',
        'estado'
    ];



    public function User()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
