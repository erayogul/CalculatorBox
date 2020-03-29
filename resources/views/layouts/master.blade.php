<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/svg" href="../assets/img/calculator-solid.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">

    <div class="sidebar" data-color="blue"><!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="http://www.calculatorbox.net/" class="simple-text logo-mini">
          <i class="fas fa-calculator"></i>
        </a>
        <a href="http://www.calculatorbox.net/" class="simple-text logo-normal">
          Calculator Box
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">

          @if(request()->path() =='/')
            <li class="active">
          @else
            <li>
          @endif
            <a href="/">
              <i class="now-ui-icons design_app"></i>
              <p>Home Page</p>
            </a>
          </li>

          @if(request()->path() =='temperature')
            <li class="active">
          @else
            <li>
          @endif
            <a href="temperature">
              <i class="fas fa-thermometer-three-quarters"></i>
              <p>Temperature</p>
            </a>
          </li>

          @if(request()->path() =='lenght')
            <li class="active">
          @else
            <li>
          @endif
            <a href="lenght">
              <i class="fas fa-ruler"></i>
              <p>Lenght</p>
            </a>
          </li>

          @if(request()->path() =='area')
            <li class="active">
          @else
            <li>
          @endif
            <a href="area">
              <i class="fas fa-chart-area"></i>
              <p>Area</p>
            </a>
          </li>

          @if(request()->path() =='volume')
            <li class="active">
          @else
            <li>
          @endif
            <a href="speed">
              <i class="fas fa-tachometer-alt"></i>
              <p>Speed</p>
            </a>
          </li>

          @if(request()->path() =='weight')
            <li class="active">
          @else
            <li>
          @endif
            <a href="weight">
              <i class="fas fa-weight"></i>
              <p>Weight</p>
            </a>
          </li>

          @if(request()->path() =='time')
            <li class="active">
          @else
            <li>
          @endif
            <a href="time">
              <i class="fas fa-clock"></i>
              <p>Time</p>
            </a>
          </li>

        </ul>
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav  class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
              @if(request()->path() =='/')
                <a class="navbar-brand" href="#">Main Page</a>
              @elseif (request()->path() =='temperature')
                <a class="navbar-brand" href="#">Temperature</a>
              @elseif (request()->path() =='lenght')
                <a class="navbar-brand" href="#">Lenght</a>
              @elseif (request()->path() =='area')
                <a class="navbar-brand" href="#">Area</a>
              @elseif (request()->path() =='volume')
                <a class="navbar-brand" href="#">Volume</a>
              @elseif (request()->path() =='weight')
                <a class="navbar-brand" href="#">Weight</a>
              @elseif (request()->path() =='time')
                <a class="navbar-brand" href="#">Time</a>
              @endif

          </div>

        </div>
      </nav>
      <!-- End Navbar -->



      <div style="margin-top:75px;" class="content">
        @yield('content')
      </div>



      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="http://www.calculatorbox.net/">
                  CalculatorBox.net
                </a>
              </li>
              <li>
                <a href="https://www.erayogul.com/">
                  About Us
                </a>
              </li>
              <li>
                <a href="https://www.erayogul.com/">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Eray Oğul <!--  Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>. -->
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
@yield('scripts')
</body>

</html>
