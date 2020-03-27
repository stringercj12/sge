<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = [
        'name', 'user', 'categoria', 'duracao', 'descricao'
    ];


    public function Users()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
