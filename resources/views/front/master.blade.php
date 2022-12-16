<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTMS - @yield('title')</title>
    <!--CSS Link-->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/bootstrap.min.css">
</head>
<body>
<!--Start Navbar-->
@include('front.includes.menu')
<!--End Navbar-->

@yield('body')


<!--Bootstrap JS-->
<script src="{{asset('/')}}front/assets/js/bootstrap.bundle.js"></script>
</body>
</html>

