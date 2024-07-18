<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> SINODE GEREJA KRISTUS &mdash; SINODE</title>

    <!-- General CSS Files -->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/view.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            {{-- Navbar --}}
            @include('layouts.admin.header')
            
            {{-- Sidebar --}}
            @include('layouts.admin.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                {{-- <section class="section">
                    <div class="section-header">
                        <h1>
                            @yield('title')
                        </h1>
                        @yield('breadcrump')

                    </div>

                </section> --}}
                @yield('content')

            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <b>&copy; {{date('Y')}} Copyright Sinode Gereja Kristus</b>

                </div>
                {{-- <div class="footer-right">
                    2.3.0
                </div> --}}
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/export.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src="{{ asset('assets/js/modules-chartjs.js') }}"></script> --}}

    @stack('js')
</body>

</html>