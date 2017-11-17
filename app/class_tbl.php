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
    'class_id', 'crs_sec', 'prof_id', 'room',
  ];

}
