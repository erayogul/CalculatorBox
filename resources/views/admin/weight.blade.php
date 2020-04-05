@extends('layouts.master')


@section('title')
      CalculatorBox.net - Weight
@endsection

@section('content')

<div class="row">
  <div  class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="title">Weight Conversions</h5>
          <hr>
        </div>
        <div  class="card-body">
            <center>

              <p>From</p>

              <div style="max-width:500px;" class="input-group">
                <input oninput="convertweight();" id="weightFromText" type="text" class="form-control">
                  <select  onChange="convertweight();" style="max-width:200px;" class="custom-select" id="weightFrom">
                    <option value="1">Kilogram (kg)</option>
                    <option value="2">Gram (g)</option>
                    <option value="3">Miligram (mg)</option>
                    <option value="4">Metric Ton (t)</option>
                    <option value="5">Long Ton (t)</option>
                    <option value="6">Short Ton (t)</option>
                    <option value="7">Pound (lb)</option>
                    <option value="8">Ounce (oz)</option>
                    <option value="9">Carrat (ct)</option>
                    <option value="10">Atomic Mass Unit (u)</option>
                  </select>
              </div>

              <p>To</p>

              <div style="max-width:500px;" class="input-group">
                <input id="weightToText" type="text" readonly class="form-control">
                  <select onChange="convertweight();" style="max-width:200px;" class="custom-select" id="weightTo">
                    <option value="1">Kilogram (kg)</option>
                    <option value="2">Gram (g)</option>
                    <option value="3">Miligram (mg)</option>
                    <option value="4">Metric Ton (t)</option>
                    <option value="5">Long Ton (t)</option>
                    <option value="6">Short Ton (t)</option>
                    <option value="7">Pound (lb)</option>
                    <option value="8">Ounce (oz)</option>
                    <option value="9">Carrat (ct)</option>
                    <option value="10">Atomic Mass Unit (u)</option>
                  </select>
              </div>

              <button id="weightConverter"type="button" onclick="convertweight()" class="btn btn-primary">Convert</button>
            <!--  <button type="button" onclick="clear_all()" class="btn btn-danger btn-sm">Clear</button> -->

            </center>
        </div>
        </div>
  </div>
</div>

<script>

var input = document.getElementById("weightFromText");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("weightConverter").click();
  }
});

</script>


@endsection

@section('scripts')

@endsection
