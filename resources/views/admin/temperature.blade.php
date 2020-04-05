@extends('layouts.master')


@section('title')
      CalculatorBox.net - Temperature
@endsection

@section('content')

<div class="row">
  <div  class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Temperature Conversions</h5>
          <hr>
        </div>
        <div  class="card-body">
            <center>

              <p>From</p>

              <div style="max-width:500px;" class="input-group">
                <input oninput="convertTemperature();" id="temperatureFromText" type="text" class="form-control">
                  <select onChange="convertTemperature();" style="max-width:200px;" class="custom-select" id="temperatureFrom">
                    <option selected value="1">Celsius (°C)</option>
                    <option value="2">Fahreneith (°F)</option>
                    <option value="3">Kelvin (°K)</option>
                  </select>
              </div>

              <p>To</p>

              <div style="max-width:500px;" class="input-group">
                <input id="temperatureToText" type="text" readonly class="form-control">
                  <select onChange="convertTemperature();" style="max-width:200px;" class="custom-select" id="temperatureTo">
                    <option value="1">Celsius (°C)</option>
                    <option selected value="2">Fahreneith (°F)</option>
                    <option value="3">Kelvin (°K)</option>
                  </select>
              </div>

              <button id="temperatureConverter"type="button"  onclick="convertTemperature()" class="btn btn-primary">Convert</button>
            <!--  <button type="button" onclick="clear_all()" class="btn btn-danger btn-sm">Clear</button> -->

            </center>
        </div>
        </div>
  </div>
</div>

<script>

var input = document.getElementById("temperatureFromText");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("temperatureConverter").click();
  }
});

</script>

@endsection

@section('scripts')

@endsection
