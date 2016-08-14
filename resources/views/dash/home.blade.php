
@extends('layouts.app')

@section('content')

<div class = "container">
  <div class = "row">
    <div class = "col-md-2">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Profile</h3>
      </div>
      <div class="panel-body">
        <p><strong>Username:</strong> {{$user->username}}</p>
        <p><strong>Weight:</strong> {{$user->weight}}</p>
        <p><strong>DOB: </strong>{{$user->birth_date}}</p>
      </div>
    </div>
  </div>


    <div class = "col-md-7">
      <a href = "{{ url('/goal/create') }}" class = "btn btn-primary pull-right">New Goal</a>

      <h3>My Goals</h3>

      <ul class = "list-group">
      @foreach($goals as $goal)
      <li class = "list-group-item">
        <div class = "row">
          <div class = "col-md-2">
            <strong>{{$goal->exercise->name}}</strong>
          </div>
          <div class = "col-md-10">
            <strong>Target Date:</strong> {{$goal->target_date}}
            <strong>Reps:</strong> {{$goal->reps}}
            <strong>Weight:</strong> {{$goal->weight}}
            <a class = "btn btn-info pull-right" href = "{{ url('/goal/'.$goal->id)}}">Log Progress</a>
          </div>
          </div>

      </li>
      @endforeach
    </ul>
    </div>
    <div class = "col-md-2">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Followers</h3>
      </div>
      <div class="panel-body">
        <p>None (not done yet)</p>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>

@endsection
