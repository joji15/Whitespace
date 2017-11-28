<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history_tbl extends Model
{
  protected $table = 'history_tbl';

  protected $primaryKey = 'history_id';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'history_id', 'query_text', 'created_at', 'student_id',
  ];
}
