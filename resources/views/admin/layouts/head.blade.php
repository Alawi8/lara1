<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Charts</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{URL('vendor/fontawesome-free/css/all.min.css')}}">
        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="{{URL('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}">
    <link rel="stylesheet" href="{{URL('css/admin/sb-admin-2.min.css')}}">


</head>

<body>
    <div class="row">
        <div class="col-2">

            <!-- Sidebar -->
            @include('admin.layouts.sidebar')
            <!-- End of Sidebar -->
        </div>
        <div class="col-10">
            @include('admin.pages.topbar')
            @yield('index')
        </div>
    </div>

    <footer>
        @include('admin.layouts.footer')
    </footer>
</body>

</html>
