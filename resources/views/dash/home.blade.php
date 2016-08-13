
@extends('layouts.app')

@section('content')

<div class = "container">
  <div class = "row">
    <div class = "col-md-3">
      <h5>Profile Info</h5>
      <p>Username: {{$user->username}}</p>
      <p>Weight: {{$user->weight}}</p>
      <p>DOB: {{$user->birth_date}}</p>
    </div>

    <div class = "col-md-6">
      Dashboard

    </div>

    <div class = "col-md-3">
      Followers
    </div>
  </div>
</div>

@endsection
