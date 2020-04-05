@extends('layouts.master')


@section('title')
      CalculatorBox.net - Volume
@endsection

@section('content')

<div class="row">
  <div  class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Volume Conversions</h5>
          <hr>
        </div>
        <div  class="card-body">
            <center>

              <p>From</p>

              <div style="max-width:500px;" class="input-group">
                <input oninput="convertvolume();" id="volumeFromText" type="text" class="form-control">
                  <select onChange="convertvolume();" style="max-width:200px;" class="custom-select" id="volumeFrom">
                    <option selected value="1">Cubic Meter </option>
                    <option value="2">Cubic Kilometer</option>
                    <option value="3">Cubic Centimeter</option>
                    <option value="4">Cubic Millimeter</option>
                    <option value="5">Liter</option>
                    <option value="6">Milliliter</option>
                    <option value="7">US Gallon</option>
                    <option value="8">US Quart</option>
                    <option value="9">US Pint</option>
                    <option value="10">US Cup</option>
                    <option value="11">US Fluid Ounce)</option>
                    <option value="12">US Table Spoon</option>
                    <option value="13">US Tea Spoon</option>
                    <option value="14">Imperial Gallon</option>
                    <option value="15">Imperial Quart</option>
                    <option value="16">Imperial Pint</option>
                    <option value="17">Imperial Fluid Ounce</option>
                    <option value="18">Imperial Table Spoon</option>
                    <option value="19">Imperial Tea Spoon</option>
                    <option value="20">Cubic Mile</option>
                    <option value="21">Cubic Yard</option>
                    <option value="22">Cubic Foot</option>
                    <option value="23">Cubic Inch</option>
                  </select>
              </div>

              <p>To</p>

              <div style="max-width:500px;" class="input-group">
                <input id="volumeToText" type="text" readonly class="form-control">
                  <select onChange="convertvolume();" style="max-width:200px;" class="custom-select" id="volumeTo">
                    <option value="1">Cubic Meter </option>
                    <option selected value="2">Cubic Kilometer</option>
                    <option value="3">Cubic Centimeter</option>
                    <option value="4">Cubic Millimeter</option>
                    <option value="5">Liter</option>
                    <option value="6">Milliliter</option>
                    <option value="7">US Gallon</option>
                    <option value="8">US Quart</option>
                    <option value="9">US Pint</option>
                    <option value="10">US Cup</option>
                    <option value="11">US Fluid Ounce)</option>
                    <option value="12">US Table Spoon</option>
                    <option value="13">US Tea Spoon</option>
                    <option value="14">Imperial Gallon</option>
                    <option value="15">Imperial Quart</option>
                    <option value="16">Imperial Pint</option>
                    <option value="17">Imperial Fluid Ounce</option>
                    <option value="18">Imperial Table Spoon</option>
                    <option value="19">Imperial Tea Spoon</option>
                    <option value="20">Cubic Mile</option>
                    <option value="21">Cubic Yard</option>
                    <option value="22">Cubic Foot</option>
                    <option value="23">Cubic Inch</option>
                  </select>
              </div>

              <button id="volumeConverter"type="button"  onclick="convertvolume()" class="btn btn-primary">Convert</button>
            <!--  <button type="button" onclick="clear_all()" class="btn btn-danger btn-sm">Clear</button> -->

            </center>
        </div>
        </div>
  </div>
</div>

<script>

var input = document.getElementById("volumeFromText");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("volumeConverter").click();
  }
});

</script>

@endsection

@section('scripts')

@endsection
