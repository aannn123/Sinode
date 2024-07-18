<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/view.css') }}">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    @stack('css')
</head>

<body>
    <div class="row">
        <div class="col-md-3 display-left">
            @include('layouts.user.sidebar')
        </div>  
        <div class="col-md-9" style="padding-top:30px;padding-left:20px;">
            @yield('content')
        </div>
    <div class="col-md-12 d-flex align-items-center justify-content-center" style="background-color: #001420;height:60px">
        <b style="color: white">&copy; {{date('Y')}} Copyright Sinode Gereja Kristus</b>
    </div>


    </div>
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/cannot-back.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js')
</body>

</html>
