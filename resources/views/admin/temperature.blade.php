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


      <select multiple="multiple" id="example" name="example[]">

        <option value="option 1">Option 1</option>

        <option value="option 2">Option 2</option>

        <option value="option 3">Option 3</option>

        <option value="option 4">Option 4</option>



        <option value="option n">Option n</option>

      </select>


          </center>

        </div>
        </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
