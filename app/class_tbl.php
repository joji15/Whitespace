<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class class_tbl extends Model
{
  protected $table = 'class_tbl';

  protected $primaryKey = 'class_id';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'class_id', 'course', 'section', 'school_year', 'prof_id',
  ];

  public function students()
  {
    return $this->hasMany('App\student', 'student_id');
  }

  public function profs()
  {
    return $this->belongsTo('App\prof');
  }
}
