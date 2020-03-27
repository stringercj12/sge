<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'task_date',
        'date_start',
        'date_end',
        'image_event'
    ];
}
