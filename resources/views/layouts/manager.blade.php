<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shoe | Store</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Material Dashboard CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/material-dashboard.css')}}">

    <script src="{{asset('js/core/jquery.min.js')}}" defer type="text/javascript"></script>
    <script src="{{asset('js/core/popper.min.js')}}" defer type="text/javascript"></script>
    <script src="{{asset('js/core/bootstrap-material-design.min.js')}}" defer type="text/javascript"></script>

    <!-- Plugin for the Perfect Scrollbar -->
    <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}" defer></script>

    <!-- Plugin for the momentJs  -->
    <script src="{{asset('js/plugins/moment.min.js')}}" defer></script>

    <!--  Plugin for Sweet Alert -->
    <script src="{{asset('js/plugins/sweetalert2.js')}}" defer></script>

    <!-- Forms Validations Plugin -->
    <script src="{{asset('js/plugins/jquery.validate.min.js')}}" defer></script>

    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{asset('js/plugins/jquery.bootstrap-wizard.js')}}" defer></script>

    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('js/plugins/bootstrap-selectpicker.js')}}" defer></script>

    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{asset('js/plugins/bootstrap-datetimepicker.min.js')}}" defer></script>

    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="{{asset('js/plugins/jquery.datatables.min.js')}}" defer></script>

    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{asset('js/plugins/bootstrap-tagsinput.js')}}" defer></script>

    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('js/plugins/jasny-bootstrap.min.js')}}" defer></script>

    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{asset('js/plugins/fullcalendar.min.js')}}" defer></script>

    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{asset('js/plugins/jquery-jvectormap.js')}}" defer></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('js/plugins/nouislider.min.js')}}" defer></script>

    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js')}}" defer></script>

    <!-- Library for adding dinamically elements -->
    <script src="{{asset('js/plugins/arrive.min.js')}}" defer></script>

    <!--  Google Maps Plugin    -->
    <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}" defer></script>

    <!-- Chartist JS -->
    <script src="{{asset('js/plugins/chartist.min.js')}}" defer></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('js/plugins/bootstrap-notify.js')}}" defer></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('js/material-dashboard.min.js?v=2.1.2')}}" defer type="text/javascript"></script>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
            <div class="logo">
                <img src="{{asset('img/foot_junkies_logo-01.png')}}" defer alt="" style="width: 150px; margin-left: 60px" />
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ Request::is( 'manager') ? "active":"" }}">
                    <a class="nav-link" href="/manager">
                      <i class="material-icons">dashboard</i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                  <li class="{{ Request::is( 'manager/user') ? "active":"" }}">
                    <a class="nav-link" href="/manager/user">
                      <i class="material-icons">person</i>
                      <p>Shop Profile</p>
                    </a>
                  </li>
                  <li class="{{ Request::is( 'manager/staff') ? "active":"" }}">
                    <a class="nav-link" href="/manager/staff">
                      <i class="material-icons">bubble_chart</i>
                      <p>Staff Profile</p>
                    </a>
                  </li>
                <li class="{{ Request::is( 'manager/product') ? "active":"" }}">
                    <a class="nav-link" href="/manager/product">
                      <i class="material-icons">assignment</i>
                      <p>Products List</p>
                    </a>
                  </li>
                <li class="{{ Request::is( 'manager/order') ? "active":"" }}">
                    <a class="nav-link" href="/manager/order">
                      <i class="material-icons">view_list</i>
                      <p>Order List</p>
                    </a>
                  </li>
                  <li class="{{ Request::is( 'manager/tasks') ? "active":"" }}">
                    <a class="nav-link" href="/manager/tasks">
                      <i class="material-icons">list_alt</i>
                      <p>Task List</p>
                    </a>
                  </li>
                  <li class="{{ Request::is( 'manager/search') ? "active":"" }}">
                    <a class="nav-link" href="/manager/search">
                      <i class="material-icons">plagiarism</i>
                      <p>Search Products</p>
                    </a>
                  </li>
                </ul>
              </div>
        </div>
        @yield('content')
    </div>


    <!--   Core JS Files   -->


</body>

</html>
