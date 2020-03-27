<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Protocolos extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'anexo1',
        'anexo2',
        'tipo_solicitacao',
        'user',
        'status',
        'nivel_de_dificuldade',
        'data_abertura',
        'data_prevista',
        'data_fechamento',
        'resolucao',
        'anexo_resolucao',
    ];

   public function User()
   {
       return $this->belongsTo(User::class, 'user','id');
   }
}
