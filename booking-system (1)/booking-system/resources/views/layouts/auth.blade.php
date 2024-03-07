<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <title>Registration Form</title>
    <style>
        body{
            background: url("{{asset('/assets/images/banner3.jpg')}}");
            background-size: cover;
            /* background-position: center; */
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>

    @yield('auth')

    @include('sweetalert::alert')
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-3.0.0.min.js') }}"></script>
</body>
</html>
