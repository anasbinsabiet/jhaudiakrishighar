<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/css/default/app.min.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/fontawesome/css/font-awesome.min.css" rel="stylesheet" />


    <link href="{{asset('backend')}}/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" />
    <!-- Toastr -->
    <!-- summernote -->
    <link href="{{asset('backend')}}/assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />

    <style>
    .panel-title a {
        cursor: pointer;
    }

    .content {
        padding: 20px;
    }

    .fade {
        opacity: 1;
    }

    .sidebar .nav>li.nav-profile .image img {
        width: 100%;
        height: 100%;
    }

    .panel .panel-heading .panel-title {
        font-size: 15px;

    }

    .borderless td,
    .borderless th {
        border: none;
    }

    .btn-group a {
        margin: 5px;
    }

    .badge-danger {
        color: #fff !important;
        background-color: #ff5b57 !important;
        padding: 3px 8px !important;
    }

    .note-editor.note-frame .note-editing-area .note-editable,
    .note-editor.note-airframe .note-editing-area .note-editable {
        height: 300px;
    }

    div#content {
        margin: 0px;
        padding: 0px;
    }
    @media only screen and (max-width: 768px){
        ul.navbar-nav.navbar-right {
            display: inline-flex;
        }
        div#header {
            display: inline-flex !important;
        }
        .header .navbar-nav>li>a {
            line-height: 29px;
            padding: 10px 8px;
        }
        .btn-group a.btn.btn-danger {
            line-height: 1.75rem;
        }
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head><!-- Datatables -->
<script src="{{asset('backend')}}/assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="text/javascript">
</script>
<script src="{{asset('backend')}}/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"
    type="text/javascript"></script>

<body>
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!--header area-->
        @include('backend.layouts.header')
        @yield('content')
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade"
            data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    </div>

    <script src="{{asset('backend')}}/assets/js/app.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/js/theme/default.min.js" type="text/javascript"></script>
    <script src="{{asset('backend')}}/assets/js/demo/dashboard.js" type="text/javascript"></script>

    <!-- select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    @yield('customjs')
</body>

</html>