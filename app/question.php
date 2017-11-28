<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
  use Notifiable;

    protected $table = 'question_tbl';

    protected $primaryKey = 'question_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'question', 'choice_A', 'choice_B', 'choice_C', 'choice_D', 'correct_ans', 'quiz_id',
    ];

    public function quizzes()
    {
      return $this->belongsTo('App\quiz');
    }
}
