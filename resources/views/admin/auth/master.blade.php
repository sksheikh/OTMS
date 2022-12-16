<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('/')}}admin/assets//css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets//css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

</head>

<body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
       @yield('body')
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<footer class="footer footer-alt">
    {{date('Y')}} © Copyright | All right reserve
</footer>

<!-- bundle -->
<script src="{{asset('/')}}admin/assets//js/vendor.min.js"></script>
<script src="{{asset('/')}}admin/assets//js/app.min.js"></script>

</body>

</html>

