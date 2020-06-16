<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sipdema | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/font-awesome/css/font-awesome.min.css')  }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/adminlte/dist/css/skins/_all-skins.min.css') }}">
    <!-- Pace style -->
    <link rel="stylesheet" href="{{ asset('/adminlte/plugins/pace/pace.min.css') }}">
    @stack('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')
        @include('admin.layouts.footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('/adminlte/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('/adminlte/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- PACE -->
    <script src="{{ asset('/adminlte/plugins/pace/pace.min.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('/adminlte/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/adminlte/plugins/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- page script -->
    <script type="text/javascript">
        // To make Pace works on Ajax calls
    $(document).ajaxStart(function () {
        Pace.restart()
    })
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    </script>
    @stack('scripts')
</body>

</html>