<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class DashController extends Controller
{
    public function __construct(Request $request) {
      $this->middleware('auth');
      $this->goals = $request->user()->goals()->get();
      $this->user = $request->user();
    }

    public function home(Request $request) {

      return view('dash.home', ['user'=> $this->user, 'goals' => $this->goals]);
    }

}
