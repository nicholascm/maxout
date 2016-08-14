@extends('layouts.app')
@section('content')
<div>
  <div class = "jumbotron text-center">
    <h1>maxout</h1>
    <p>Track your power lifting goals in real time</p>
    <a class = "btn btn-success" href = {{url('/register')}}>Get Started Today</a>
  </div>
</div>
@endsection
