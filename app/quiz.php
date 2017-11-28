<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    protected $table = 'quiz_tbl';

    protected $primaryKey = 'quiz_code';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'quiz_id', 'quiz_title', 'quiz_desc', 'quiz_sched_id',
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    
    public function questions()
    {
        return $this->hasMany('App\question');
    }
}
