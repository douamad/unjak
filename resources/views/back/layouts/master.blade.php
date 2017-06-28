<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Blank | Clear Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/themify/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom_css/metisMenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/bootstrap-switch/css/bootstrap-switch.css') }}">
    <!-- end of global css -->
    <!-- page css -->
    @yield('page_css')
    <!-- end page css -->

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
</head>

<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
@include('back.layouts.header')
<!-- end header -->
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @include('back.layouts.leftside')
    <!-- end Left side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        @include('back.layouts.breadcrumb')
        <!-- End Content Header -->
        <!-- Main content -->
        <section class="content">
            <!--rightside bar -->
            @include('back.layouts.rightside')
            <!-- end rightside bar -->


            @yield('content')

            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- /.right-side -->
<!-- ./wrapper -->
<!-- global js -->

<script src="{{ asset('/js/all.js') }}" type="text/javascript"></script>
@yield('page_script')
<!-- end of global js -->
<!-- page level js -->

<!-- end of page level js -->

</body>

</html>
