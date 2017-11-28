<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prof extends Authenticatable
{
    use Notifiable;

    protected $table = 'professor';

    protected $primaryKey = 'prof_id';

    protected $guard = 'prof';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prof_id', 'prof_email', 'prof_fName', 'prof_mName', 'prof_lName', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function classes()
    {
      return $this->hasMany('App\class_tbl');
    }
}
