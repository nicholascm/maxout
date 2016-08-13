<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Goal;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birth_date', 'weight', 'favorite_lift'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function goals() {
      return $this->hasMany(Goal::class);
    }

}
