<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Charts</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ URL('../../laravel/public/vendor/fontawesome-free/css/all.min.css') }}">
    <link href="{{ URL('../../laravel/public/css/fontawsome/all.min.css') }}" rel="stylesheet">

    {{-- css font awsome  --}}
    <script src="https://kit.fontawesome.com/d1dd6f0a6f.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link rel="stylesheet"
        href="{{ URL('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}">

    <!--incloud bootsrap 5.5-->
    <link rel="stylesheet" href="{{ URL('../../laravel/public/css/bootstrap.css') }}">


    <link rel="manifest" href="{{ URL('../../laravel/public/icons/dist/fether.js') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@500&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }
    </style>
</head>
{{-- div row 12 col to topbar --}}
<div class="row ">
    <div class="col-12 ">
        @include('admin.layouts.topbar')
    </div>
</div>

{{-- div row 3 col to sidebar --}}
<div class="row ">
    <div class="col-1  bg-secondary ">
        @include('admin.layouts.sidebar')

    </div>

    <div class="col-11 bg-secondary">
        <div class="card bg-light">
            @include('admin.layouts.erorrs')
            @yield('index')


        </div>

    </div>

</div>
<div class="row">

</div>
{{-- row div 12 col to footer --}}
<div class="row">
    <div class="col-12 bg-secondary">
        @include('admin.layouts.footer')
    </div>
</div>
</html>
