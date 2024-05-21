<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ $title }} &mdash; {{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('landing_page/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ asset('landing_page/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/jquery.timepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('landing_page/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('landing_page/css/style.css') }}">
</head>

<body>

  {{ $slot }}

  <x-layouts.partials.footer />

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="{{ asset('landing_page/js/jquery.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/popper.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/aos.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('landing_page/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('landing_page/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('landing_page/js/google-map.js') }}"></script>
  <script src="{{ asset('landing_page/js/main.js') }}"></script>

</body>

</html>
