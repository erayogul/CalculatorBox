@extends('layouts.master')


@section('title')
      CalculatorBox.net - Area
@endsection

@section('content')

<div class="row">
  <div  class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Area Conversions</h5>
          <hr>
        </div>
        <div  class="card-body">
            <center>

              <p>From</p>

              <div style="max-width:500px;" class="input-group">
                <input oninput="convertarea();" id="areaFromText" type="text" class="form-control">
                  <select onChange="convertarea();" style="max-width:200px;" class="custom-select" id="areaFrom">
                    <option selected value="1">Square Meter (m²)</option>
                    <option value="2">Square Kilometer (km²)</option>
                    <option value="3">Square Centimeter (cm²)</option>
                    <option value="4">Square Mikrometer (µm2)</option>
                    <option value="5">Hectare (ha)</option>
                    <option value="6">Square Mile (mi²)</option>
                    <option value="7">Square Yard (yd²)</option>
                    <option value="8">Square Foot (fti²)</option>
                    <option value="9">Square Inch (in2)</option>
                    <option value="10">Acre (ac)</option>
                  </select>
              </div>

              <p>To</p>

              <div style="max-width:500px;" class="input-group">
                <input id="areaToText" type="text" readonly class="form-control">
                  <select onChange="convertarea();" style="max-width:200px;" class="custom-select" id="areaTo">
                    <option value="1">Square Meter (m²)</option>
                    <option selected value="2">Square Kilometer (km²)</option>
                    <option value="3">Square Centimeter (cm²)</option>
                    <option value="4">Square Mikrometer (µm2)</option>
                    <option value="5">Hectare (ha)</option>
                    <option value="6">Square Mile (mi²)</option>
                    <option value="7">Square Yard (yd²)</option>
                    <option value="8">Square Foot (fti²)</option>
                    <option value="9">Square Inch (in2)</option>
                    <option value="10">Acre (ac)</option>
                  </select>
              </div>

              <button id="areaConverter"type="button" onclick="convertarea()" class="btn btn-primary">Convert</button>
            <!--  <button type="button" onclick="clear_all()" class="btn btn-danger btn-sm">Clear</button> -->

            </center>
        </div>
        </div>
  </div>
</div>

<script>

var input = document.getElementById("areaFromText");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("areaConverter").click();
  }
});

</script>


@endsection

@section('scripts')

@endsection
