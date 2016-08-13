@extends('layouts.app')
@section('content')
<div class = "container">
  <div class = "row">
    <div class = "col-md-3">
      <p> Exercise: {{$goal->exercise->name}}</p>
      <p> Target Date: {{$goal->target_date}} </p>
      <p> Reps: {{$goal->reps}} </p>
      <p> Weight: {{$goal->weight}} </p>
    </div>

    <div class = "col-md-9">
      <form class = "form-inline" method = "POST" action ="{{ url('/measurement/create/'.$goal->id)}}">
        {!! csrf_field() !!}

      <div class="form-group">
        <label for="weight">Weight</label>
        <input type="number" name="weight" class="form-control" id="weight" placeholder="Weight">
      </div>
      <div class="form-group">
        <label for="reps">Reps</label>
        <input type="number" name="reps" class="form-control" id="reps" placeholder="Reps">
      </div>

      <button type="submit" class="btn btn-primary">
          LOG WORK
      </button>
      </form>
      <h3>My Progress on {{$goal->exercise->name}}</h3>
      <table class = "table">
        <thead>
          <tr>
            <th>Date/Time Completed</th>
            <th>Weight</th>
            <th>Reps</th>
          </tr>
          <tbody>
      @foreach ($goal->measurements as $measurement)
          <tr>
            <td>{{$measurement->completed_date_time}}</td>
            <td>{{$measurement->weight}}</td>
            <td>{{$measurement->reps}}</td>
          </tr>
      @endforeach
    </tbody>
    </div>
  </div>
</div>
@endsection
