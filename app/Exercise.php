<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Goal;
use App\User;

class Exercise extends Model
{
    protected $fillable = ['name'];

    public function goal() {
      return $this->belongsTo(Goal::class);
    }

    public function user() {
      return $this->belongsTo(User::class, 'foreign_key', 'favorite_lift');
    }
}
