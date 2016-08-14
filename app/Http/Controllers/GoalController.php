<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exercise;
use App\Goal;
use App\Classes\Progress;
use Validator;

class GoalController extends Controller
{
    public function __construct(Request $request) {
      $this->middleware('auth');
      $this->user = $request->user();
    }

    public function create(Request $request) {
      $exercises = Exercise::all();
      return view('goals.create', ['exercises' => $exercises]);
    }

    public function store(Request $request) {
      $chosen_exercise = Exercise::find(1)
        ->where('name', $request->input('exercise'))
        ->first();

      Goal::create([
        'user_id'=>$this->user->id,
        'exercise_id'=> $chosen_exercise->id,
        'target_date' => $request->input('target_date'),
        'weight' => $request->input('weight'),
        'reps' => $request->input('reps')
      ]);

      return redirect()->action('DashController@home');
    }

    public function show ($id) {
      $goal = Goal::findOrFail($id);
      $statement = new Progress($goal->measurements);
      return view('goals.detail', ['goal' => $goal, 'statement'=>$statement]);
    }

    public function update($id) {

    }

}
