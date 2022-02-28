<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('/')}}assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>

@include('includes.menu')
@yield('body')




<script src="{{asset('/')}}assets/js/jquery-3.6.0.min"></script>
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
