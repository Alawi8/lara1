@extends('admin.layouts.head')
@section('index')
<head>
  <!--load your compiled CSS (including Font Awesome) -->
  <link href="{{URL('profile/css/fonawsome/all.min.css')}}" rel="stylesheet">
</head>
<body>
  <!-- This example uses <i> element with: 
  1. the `fa-solid` style class for solid style
  2. the `user` icon with the `fa-` prefix -->
  <i class="fa-solid fa-user"></i>
  <i class="fa-light fa-house"></i>
  <!-- Or you can use a <span> element, with classes applied in the same way -->
  <span class="fa-solid fa-user"></span>
</body>

@endsection