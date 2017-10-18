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
        'prof_id', 'email', 'first_Name', 'middle_Name', 'last_Name', 'address', 'contact_no', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
