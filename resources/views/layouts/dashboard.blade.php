<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                    <li class="{{ Request::is( 'admin') ? "active":"" }}">
                        <a class="nav-link" href="/admin">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/users') ? "active":"" }}">
                        <a class="nav-link" href="/admin/users">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="{{ Request::is( 'admin/shops') ? "active":"" }}">
                        <a class="nav-link" href="/admin/shops">
                            <i class="material-icons">content_paste</i>
                            <p>Shops List</p>
                        </a>
                    </li>
                    <li class="{{ Request::is( 'admin/customers') ? "active":"" }}">
                        <a class="nav-link" href="/admin/customers">
                            <i class="material-icons">content_paste</i>
                            <p>Customers List</p>
                        </a>
                    </li>
                    <li class="{{ Request::is( 'admin/products') ? "active":"" }}">
                        <a class="nav-link" href="/admin/products">
                            <i class="material-icons">content_paste</i>
                            <p>Products List</p>
                        </a>
                    </li>

                    <li class="{{ Request::is( 'admin/tasks') ? "active":"" }}">
                        <a class="nav-link" href="/admin/tasks">
                            <i class="material-icons">bubble_chart</i>
                            <p>Tasks List</p>
                        </a>
                    </li>
                    <li class="{{ Request::is( 'admin/notifications') ? "active":"" }}">
                        <a class="nav-link" href="/admin/notifications">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @yield('content')
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title">Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors ml-auto mr-auto">
                            <span class="badge filter badge-purple" data-color="purple"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-warning" data-color="orange"></span>
                            <span class="badge filter badge-danger" data-color="danger"></span>
                            <span class="badge filter badge-rose active" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('../assets/img/sidebar-1.jpg')}}" defer alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('../assets/img/sidebar-2.jpg')}}" defer alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('../assets/img/sidebar-3.jpg')}}" defer alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{asset('../assets/img/sidebar-4.jpg')}}" defer alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--   Core JS Files   -->


</body>

</html>
