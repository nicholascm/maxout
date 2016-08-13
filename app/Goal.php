<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Measurement;
use App\Exercise;

class Goal extends Model
{
    protected $fillable = ['user_id', 'exercise_id', 'target_date', 'reps','weight'];

    public function user() {
      return $this->belongsTo(User::class);
    }

    public function measurements() {
      return $this->hasMany(Measurement::class);
    }

    public function exercise() {
      return $this->hasOne(Exercise::class);
    }
}
