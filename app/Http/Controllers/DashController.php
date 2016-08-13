<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class DashController extends Controller
{
    public function __construct(Request $request) {
      $this->middleware('auth');
    }

    public function home(Request $request) {
      $goals = $request->user()->goals()->get();
      $user = $request->user();
      return view('dash.home', ['user'=> $user, 'goals' => $goals]);
    }

}
