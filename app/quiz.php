<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $table = 'quiz';

    protected $primaryKey = 'quiz_code';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'quiz_code', 'title', 'sched_date', 'sched_time', 'class_id', 'prof_id',
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'quiz_code', 'class_id', 'prof_id',
    ];
}
