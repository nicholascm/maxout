<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Exercise;
use App\Goal;
use Validator;
use App\Measurement;

class MeasurementController extends Controller
{
    public function __construct(Request $request) {
      $this->middleware('auth');
      $this->user = $request->user();
    }

    public function store(Request $request, $id) {

      //really need some validations and failsafes here 
      Measurement::create([
        'goal_id' => $id,
        'completed_date_time'=> date('Y-m-d'),
        'weight'=> $request->input('weight'),
        'reps' => $request->input('reps')
      ]);

      return redirect()->action('GoalController@show', ['id'=>$id]);
    }

    public function update($id) {

    }

}
