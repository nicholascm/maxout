<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Goal; 

class Measurement extends Model
{
    protected $fillable = ['goal_id', 'completed_date_time', 'weight', 'reps'];

    public function goal() {
      return $this->belongsTo(Goal::class);
    }

}
