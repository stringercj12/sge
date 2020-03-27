<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $table = 'emails';

    protected $fillable = [
        'user_id',
        'to',
        'cc',
        'subject',
        'message',
        'files',
        'status',
    ];


    public function relUser(){
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
