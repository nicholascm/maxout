@extends('layouts.app')

@section('content')
  <div class = "container">
    <div class = "jumbotron">
      <p>{{$user->name}}'s' Fitness Goals</p>
        <ul class = "list-group">
          @foreach ($user->goals as $goal)
          <li class = "list-group-item">
              {{$goal->exercise->name}}
              {{$goal->weight}}
              {{$goal->target_date}}
          </li>
          @endforeach
    </div>
  </div>


@endsection
