<!DOCTYPE html>
<html>

<!-- Mirrored from efile.dhakaeducationboard.gov.bd/index.php/eservice/menu by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Nov 2021 08:38:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Online Name Correction System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script type="text/javascript">
    var base_url = 'http://localhost/eservice';
    </script>
    <!-- <link rel="icon" type="image/png" sizes="32x32" href={{asset('asset/favicon.png')}}> -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="{{asset('asset/bootstrap.min.css')}}">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="{{asset('public/asset/font.css')}}">
    <link rel="stylesheet" href="{{asset('public/asset/jquery-ui.css')}}">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('public/asset/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/asset/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <!--     <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}"> -->
    <!-- Data Table Style-->
    <link rel="stylesheet" href="{{asset('public/asset/dataTables.bootstrap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/asset/_AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('public/asset/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/asset/loaders.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('public/asset/select2.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('public/asset/select2-bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/asset/layout.css')}}">
    <style type="text/css">
    .navbar-header {
        text-align: center;
        width: 100%;
        display: grid;
    }

    .nav>li>a {
        padding: 10px 10px;
    }

    .select2-container {
        padding: 0;
        border: none;
    }

    .select2-choice {
        width: 100%;
        display: block;
        line-height: 31px !important;
        height: 100% !important;
        background-image: none !important;
    }

    .layout-boxed .wrapper {
        max-width: 100% !important;
    }

    .nav-tabs-custom>.nav-tabs {
        margin: 0;
        border-bottom-color: red;
        border-top-right-radius: 3px;
        border-top-left-radius: 3px;
        background: #367fa9;
        color: white;
    }

    .site-logo {
        text-align: center;
        width: 130px;
    }

    .wrapper {

        width: 90%;
    }

    .nav-tabs-custom>.nav-tabs>li>a {
        color: white;
        border-radius: 0;
    }

    .main-header {
        background: #608621;
    }

    table tr td,
    th {
        border: 1px solid #367fa9 !important;
        padding: 10px;
    }

    .site-logo img {
        height: 60px;
    }

    .navbar-inverse {
        border-color: #3c8dbc;
    }

    .skin-blue .main-header .navbar {
        border-radius: 0px;
    }

    .main-header {
        min-height: 85px;
    }

    .navbar {
        margin-bottom: 0px;
    }

    .main-head-content {
        padding: 0px;
    }

    .panel-success .panel-heading {
        height: 148px;
        padding: 60px;
        text-align: center;
    }

    .panel-group .panel {
        margin: 30px 0px;
        border-radius: 4px;
    }

    .panel-title a:hover {
        color: #4a7f4b;
    }

    .navbar-nav {
        float: none;
        width: 100%;
        text-align: center;
        justify-content: space-between;
    }

    .skin-blue .main-header .navbar {
        background-color: #337ab7;
    }

    .skin-blue .main-header .navbar .nav>.active>a {
        background: transparent;
    }

    .navbar-brand {
        height: 45px;
    }

    .content-wrapper {
        min-height: unset !important;
    }
    @media only screen and (max-width: 768px){
        ul.navbar-nav.navbar-right {
            display: inline-flex;
        }
        div#header {
            display: inline-flex !important;
        }
    }
    </style>


</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->

<body class="hold-transition skin-blue layout-boxed sidebar-mini" oncontextmenu="return true;">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <section class="main-head-content">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="{{url('/')}}">Jhaudia Krishi Ghar</a>
                            <!-- <div class="site-title" style="overflow: hidden;">
                            <h3 style="font-weight: bold; text-align:left"> </h3>
                        </div> -->
                        </div>

                        <ul class="nav navbar-nav navbar-center d-block">
                            <li class="menu-home active"><a href="{{url('/')}}">Home </a></li>
                            @guest
                            <li class="menu-complain"><a href="{{route('login')}}">Login </a></li>
                            <li class="menu-complain"><a href="{{route('register')}}">Registation </a></li>
                            @else
                            <li class="menu-complain"><a href="{{url('profile')}}">Profile </a></li>
                            <li class="menu-complain"><a href="{{url('applications')}}">Applications </a></li>
                            <li class="menu-complain"><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </section>
        </header>


        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')

        </div><!-- /.content-wrapper -->
        <!-- 
        <footer class="cfooter text-center p-4" style="padding: 20px;color: #fff;">
            <span class="text-white" style="color: #fff;">Copyright &copy; 2022 <a>Online Name Correction
                    System.</a></span> All rights reserved.
        </footer> -->
        <!-- <footer class="main-footer">
            <div class="col-md-10">
                <strong>Copyright &copy; 2021 <a href="http://www.dhakaeducationboard.gov.bd/">Dhaka Education
                        Board</a>.</strong> All rights reserved.

            </div>
            <div class="col-md-2">
                <span style=""><b>Time</b> 0.0143sec &nbsp;
                    <b>Memory</b> 1.15MB</span>
            </div>
        </footer> -->

    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('public/asset/jQuery-2.1.4.min.js')}}"></script>

    <script src="{{asset('public/asset/jquery-ui.js')}}"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('public/asset/bootstrap.min.js')}}"></script>
    <!-- Data Table -->
    <script src="{{asset('public/asset/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/asset/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('public/asset/jquery.slimscroll.min.js')}}"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{asset('public/asset/Chart.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('public/asset/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('public/asset/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('public/asset/demo.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/asset/select2.min.js')}}"></script>

    <script src="{{asset('public/asset/name_5.8.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
    $(function() {
        $(".sortable").sortable();
        $(".sortable").disableSelection();
    });


    $(document).ready(function() {
        $("#findinfo").click(function() {
            $(this).hide();
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".select2_an_id").select2();
        $(".select2_eiin").select2();
        $(".select2").select2();

        // Setup - add a text input to each footer cell
        $('#example2 tfoot th').each(function() {
            var title = $(this).text();
            if (title != "") {
                titles = title.split("*");
                if (titles.length > 1) {
                    var str = '<select class="select_find  form-control">';
                    str += '<option value="">Select ' + titles[0] + '</option>';
                    for (i = 1; i < titles.length; i++) {
                        var values = titles[i].split(":");
                        if (values.length > 1) {
                            str += '<option value="' + values[0] + '">' + values[1] + '</option>';
                        } else {
                            str += '<option value="' + titles[i] + '">' + titles[i] + '</option>';
                        }
                    }
                    str += '</select>';
                    $(this).html(str);
                } else {
                    $(this).html('<input class="input_find form-control" type="text" placeholder="' +
                        title + '" />');
                }

            }
        });

        // DataTable
        var table = $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
        // Apply the search
        table.columns().every(function() {
            var that = this;

            $('input, select', this.footer()).on('keyup change', function() {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });


        // Setup - add a text input to each footer cell
        $('#example3 tfoot th').each(function() {
            var title = $(this).text();
            if (title != "") {
                titles = title.split("*");
                if (titles.length > 1) {
                    var str = '<select class="select_find  form-control">';
                    str += '<option value="">Select ' + titles[0] + '</option>';
                    for (i = 1; i < titles.length; i++) {
                        var values = titles[i].split(":");
                        if (values.length > 1) {
                            str += '<option value="' + values[0] + '">' + values[1] + '</option>';
                        } else {
                            str += '<option value="' + titles[i] + '">' + titles[i] + '</option>';
                        }
                    }
                    str += '</select>';
                    $(this).html(str);
                } else {
                    $(this).html('<input class="input_find form-control" type="text" placeholder="' +
                        title + '" />');
                }

            }
        });

        // DataTable
        // var table3 = $('#example3').DataTable({
        //     "paging": true,
        //     "lengthChange": true,
        //     "searching": true,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": true
        // });
        // // Apply the search
        // table3.columns().every(function () {
        //     var that = this;

        //     $('input, select', this.footer()).on('keyup change', function () {
        //         if (that.search() !== this.value) {
        //             that
        //                 .search(this.value)
        //                 .draw();
        //         }
        //     });
        // });

        $('#ins_list').DataTable();


        $('#example3').DataTable({
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            }
        });


    });
    </script>

    <div class="loader-header">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate-multiple">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <style type="text/css">
    .loader-header {
        display: none;
    }

    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, .8);
        z-index: 9999;
    }

    .loader-inner {
        top: 50%;
        left: 50%;
    }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('loader').className += 'loaded';
    });

    $('body').on('click', '.removeable span', function() {
        if (confirm("Do you want to remove this item?")) {
            $(this).closest('li').remove();
        }
    });
    </script>

</body>

<!-- Mirrored from efile.dhakaeducationboard.gov.bd/index.php/eservice/menu by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Nov 2021 08:39:07 GMT -->

</html>