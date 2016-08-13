<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class DashController extends Controller
{
    public function __construct() {
      //$this->middleware('auth');
    }

    public function home(Request $request) {
      return view('dash.home');
    }

}
