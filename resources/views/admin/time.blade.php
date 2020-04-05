@extends('layouts.master')


@section('title')
      CalculatorBox.net - Time
@endsection

@section('content')

<div class="row">
  <div  class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Time Conversions</h5>
          <hr>
        </div>
        <div  class="card-body">
            <center>

              <p>From</p>

              <div style="max-width:500px;" class="input-group">
                <input oninput="convertime();" id="timeFromText" type="text" class="form-control">
                  <select onChange="convertime();" style="max-width:200px;" class="custom-select" id="timeFrom">
                    <option selected value="1">Second (s)</option>
                    <option value="2">Milisecond (ms)</option>
                    <option value="3">Microsecond (μs)</option>
                    <option value="4">Nanosecond (ns)</option>
                    <option value="5">Pikosecond (ps)</option>
                    <option value="6">Minute (m)</option>
                    <option value="7">Hour (h)</option>
                    <option value="8">Day (d)</option>
                    <option value="9">Week (w)</option>
                    <option value="10">Month (M)</option>
                    <option value="11">Year (y)</option>
                  </select>
              </div>

              <p>To</p>

              <div style="max-width:500px;" class="input-group">
                <input id="timeToText" type="text" readonly class="form-control">
                  <select onChange="convertime();" style="max-width:200px;" class="custom-select" id="timeTo">
                    <option value="1">Second (s)</option>
                    <option value="2">Milisecond (ms)</option>
                    <option value="3">Microsecond (μs)</option>
                    <option value="4">Nanosecond (ns)</option>
                    <option value="5">Pikosecond (ps)</option>
                    <option selected value="6">Minute (m)</option>
                    <option value="7">Hour (h)</option>
                    <option value="8">Day (d)</option>
                    <option value="9">Week (w)</option>
                    <option value="10">Month (M)</option>
                    <option value="11">Year (y)</option>
                  </select>
              </div>

              <button id="timeConverter"type="button" onclick="convertime()" class="btn btn-primary">Convert</button>
            <!--  <button type="button" onclick="clear_all()" class="btn btn-danger btn-sm">Clear</button> -->

            </center>
        </div>
        </div>
  </div>
</div>

<script>

var input = document.getElementById("timeFromText");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("timeConverter").click();
  }
});

</script>


@endsection

@section('scripts')

@endsection
