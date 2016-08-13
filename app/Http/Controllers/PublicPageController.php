<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Classes\Progress;

class PublicPageController extends Controller
{
    public function __construct(Request $request) {

    }

    public function show(Request $request, $username) {
      $user = User::where('username', '=', $username)
        ->first();
      if (is_object($user)){
        $goal_progress = new Progress($user->goals);
        $days_idle = $goal_progress->getDaysSinceLastWorked();

        return view('social.publicpage', ['user' => $user, 'days_idle' => $days_idle]);
      } else {
        return view('dash.home');
      }
    }



}
