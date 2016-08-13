<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GoalController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

}
