@extends('layouts.app')
@section('content')

@ab('SignupConversionTest')


@condition('Original')
<div>
  <div class = "jumbotron text-center">
    <h1>maxout</h1>
    <p>Track your power lifting goals in real time</p>
    <a class = "btn btn-success" href = {{url('/register')}}>Get Started Today</a>
  </div>
</div>

@condition('New')
<div style = "background-color: #33adff">
  <div class = "jumbotron text-center">
    <h1>maxout</h1>
    <p>Track your power lifting goals in real time</p>
    <a class = "btn btn-danger" href = {{url('/register')}}>Get Started Today</a>
  </div>
</div>
@track('SignupConversion')


@endsection
