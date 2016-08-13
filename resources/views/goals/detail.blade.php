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
      <ul class = "nav nav-tabs" role = "tablist">
        <li role = "presentation" class = "active"><a data-toggle = "tab" href = "#graph">Graph</a></li>
          <li role = "presentation"><a data-toggle="tab" href = "#table">Table</a></li>
        </ul>

<div class = "tab-content">
  <div role = "tabpanel" class="tab-pane active" id = "graph">
    <canvas id="myChart" height="300" width="600"></canvas>
  </div>
  <div role = "tabpanel" class="tab-pane" id = "table">
  <table class = "table">
    <thead>
      <tr>
        <th>Date/Time Completed</th>
        <th>Weight</th>
        <th>Reps</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($goal->measurements as $measurement)
      <tr>
        <td>{{$measurement->completed_date_time}}</td>
        <td>{{$measurement->weight}}</td>
        <td>{{$measurement->reps}}</td>
      </tr>
  @endforeach
      </tbody>
    </table>

  </div>
</div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.bundle.js"></script>
    <script>

    var measurementData = {!! json_encode($goal->measurements) !!};

    var weightsLifted = measurementData.map(function(value) {
      return value.weight;
    });

    var labels = measurementData.map(function(value) {
      var d = new Date(value.completed_date_time);
      return d.toDateString();
    })

    var ctx = document.getElementById("myChart");

    var data = {
        labels: labels,
        datasets: [
            {
                label: "My Recorded Lifts",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: weightsLifted,
                spanGaps: false,
            }
        ]
    };
    var myChart = new Chart(ctx, {
      type: 'line',
      data: data
    });
    </script>

    </div>
  </div>
</div>
@endsection
