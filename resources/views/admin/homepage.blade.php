@extends('layouts.master')


@section('title')
      CalculatorBox.net
@endsection

@section('content')

<div class="row">

  <div  class="col-md-4">
    <a href="temperature">
      <div class="card card-dashboard">
        <div  class="card-body">
          <center>
              <i  class="fas fa-thermometer-three-quarters fa-8x card-dashboard-items"></i>
              <div class="card-dashboard-items" > Temperature </div>
            </center>
          </div>
        </div>
    </a>
  </div>

  <div  class="col-md-4">
    <a href="lenght">
      <div class="card card-dashboard">
        <div  class="card-body">
          <center>
              <i  class="fas fa-ruler fa-8x card-dashboard-items"></i>
              <div class="card-dashboard-items" > Lenght </div>
            </center>
          </div>
        </div>
    </a>
  </div>

  <div  class="col-md-4">
    <a href="area">
      <div class="card card-dashboard">
        <div  class="card-body">
          <center>
              <i  class="fas fa-chart-area fa-8x card-dashboard-items"></i>
              <div class="card-dashboard-items" > Area </div>
            </center>
          </div>
        </div>
    </a>
  </div>


</div>

<div class="row">

  <div  class="col-md-4">
    <a href="speed">
      <div class="card card-dashboard">
        <div  class="card-body">
          <center>
              <i  class="fas fa-tachometer-alt fa-8x card-dashboard-items"></i>
              <div class="card-dashboard-items" > Speed </div>
            </center>
          </div>
        </div>
    </a>
  </div>

  <div  class="col-md-4">
    <a href="weight">
      <div class="card card-dashboard">
        <div  class="card-body">
          <center>
              <i  class="fas fa-weight fa-8x card-dashboard-items"></i>
              <div class="card-dashboard-items" > Weight </div>
            </center>
          </div>
        </div>
    </a>
  </div>

  <div  class="col-md-4">
    <a href="time">
      <div class="card card-dashboard">
        <div  class="card-body">
          <center>
              <i  class="fas fa-clock fa-8x card-dashboard-items"></i>
              <div class="card-dashboard-items" > Time </div>
            </center>
          </div>
        </div>
    </a>
  </div>


</div>

<div class="row">
  <div  class="col-md-12">
      <div class="card">
        <div  class="card-body">
           <center>
              <i  class="fas fa-clock fa-8x card-dashboard-items"></i>
              <div class="card-dashboard-items" > Time </div>
           </center>
          </div>
        </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection
