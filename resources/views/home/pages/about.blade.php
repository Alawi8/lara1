@extends('home.layouts.body')
@section('title')
    عنا
@endsection

@section('content')
    <h2>What Can JavaScript Do?</h2>

    <p>JavaScript can change HTML attribute values.</p>

    <p>In this case JavaScript changes the value of the src (source) attribute of an image.</p>
        <button class="btn btn-primary"
            onclick="document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulbon.gif'">تشغيل</button>

        <img id="myImage" src="https://www.w3schools.com/js/pic_bulbon.gif" style="width:100px">

        <button class="btn btn-danger"
            onclick="document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulboff.gif'">ايقاف</button>
@endsection
