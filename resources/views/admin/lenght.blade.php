@extends('layouts.master')


@section('title')
      CalculatorBox.net - Lenght
@endsection

@section('content')

<div class="row">
  <div  class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Lenght Conversions</h5>
          <hr>
        </div>
        <div  class="card-body">
            <center>

              <p>From</p>

              <div style="max-width:500px;" class="input-group">
                <input oninput="convertlenght();" id="lenghtFromText" type="text" class="form-control">
                  <select onChange="convertlenght();" style="max-width:200px;" class="custom-select" id="lenghtFrom">
                    <option selected value="1">Meter (m)</option>
                    <option value="2">Kilometer (km)</option>
                    <option value="3">Centimeter (cm)</option>
                    <option value="4">Millimeter (mm)</option>
                    <option value="5">Micrometer (μm)</option>
                    <option value="6">Nanometer (nm)</option>
                    <option value="7">Mile (mi)</option>
                    <option value="8">Yard (yd)</option>
                    <option value="9">Foot (ft)</option>
                    <option value="10">Inch (in)</option>
                    <option value="11">Light Year (ly)</option>
                  </select>
              </div>

              <p>To</p>

              <div style="max-width:500px;" class="input-group">
                <input id="lenghtToText" type="text" readonly class="form-control">
                  <select onChange="convertlenght();" style="max-width:200px;" class="custom-select" id="lenghtTo">
                    <option value="1">Meter (m)</option>
                    <option selected value="2">Kilometer (km)</option>
                    <option value="3">Centimeter (cm)</option>
                    <option value="4">Millimeter (mm)</option>
                    <option value="5">Micrometer (μm)</option>
                    <option value="6">Nanometer (nm)</option>
                    <option value="7">Mile (mi)</option>
                    <option value="8">Yard (yd)</option>
                    <option value="9">Foot (ft)</option>
                    <option value="10">Inch (")</option>
                    <option value="11">Light Year (ly)</option>
                  </select>
              </div>

              <button id="lenghtConverter"type="button" onclick="convertlenght()" class="btn btn-primary">Convert</button>
            <!--  <button type="button" onclick="clear_all()" class="btn btn-danger btn-sm">Clear</button> -->

            </center>
        </div>
        </div>
  </div>
</div>

<script>

var input = document.getElementById("lenghtFromText");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("lenghtConverter").click();
  }
});

</script>


@endsection

@section('scripts')

@endsection
