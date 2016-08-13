@extends('layouts.app')

@section('content')

<div class = "container">
  <div class = "row">
    <div class = "col-md-4 col-md-offset-4">
      <form method = "POST" action ="{{ url('/goal') }}">
        {!! csrf_field() !!}

      <div class="form-group">
        <label for="target_date">Target Date</label>
        <input type="date" name="target_date" class="form-control" id="target_date" placeholder="Target Date">
      </div>

      <div class="form-group">
        <label for="exercise">Exercise</label>
        <select name = "exercise" class="form-control" id="exercise">
          @foreach ($exercises as $exercise)
            <option>{{$exercise->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="weight">Weight</label>
        <input type="number" name="weight" class="form-control" id="weight" placeholder="Weight">
      </div>

      <div class="form-group">
        <label for="reps">Reps</label>
        <input type="number" name="reps" class="form-control" id="reps" placeholder="Reps">
      </div>

      <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-sign-in"></i>Let's Do This!
              </button>
              <a class = "btn btn-link" href = "{{ url('/dash') }}">Go Back</a>
          </div>
      </div>
    </form>
    </div>
  </div>
</div>


@endsection
