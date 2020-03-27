<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alertas extends Model
{
    protected $fillable = [
        'id','titulo', 'texto', 'status',
    ];
}
