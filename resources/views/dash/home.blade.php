
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
      <a href = "{{ url('/goal/create') }}" class = "btn btn-primary pull-right">New Goal</a>

      <h3>My Goals</h3>

      <table class = "table">
        <thead>
          <tr>
            <th>Exercise Id</th>
            <th>Target Date</th>
            <th>Reps</th>
            <th>Weight</th>
          </tr>
          <tbody>
      @foreach ($goals as $goal)
          <tr>
            <td>{{$goal->exercise_id}}</td>
            <td>{{$goal->target_date}}</td>
            <td>{{$goal->reps}}</td>
            <td>{{$goal->weight}}</td>
          </tr>
      @endforeach
    </tbody>
    </table>
    </div>

    <div class = "col-md-3">
      Followers
    </div>
  </div>
</div>

@endsection
