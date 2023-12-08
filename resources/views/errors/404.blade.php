@extends('home.layouts.body')
@section('title', '404')
@section('content')
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - لا يوجد الصفحة</title>
    <style>


        .error-container {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }


        p {
            font-size: 1.2em;
            margin-bottom: 20px;
            color: #555;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>404 - لا يوجد صفحة</h1>
        <p>عذرًا، الصفحة التي تبحث عنها غير موجودة. قد تكون في مكان آخر!</p>
        <p>الرجاء <a href="{{ route('home') }}">العودة إلى الصفحة الرئيسية</a>.</p>
    </div>
</body>
@endsection
