<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Como Aguilas</title>
  <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
  <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, bower_components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="shortcut icon" href="{{ asset('/frontend/img/favicon.png') }}" >

  <!-- Stylesheets -->
  <link href="{{ asset('/bower_components/normalize.css/normalize.css') }}" rel="stylesheet"  type="text/css" />
  <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"  type="text/css" />
  <link href="{{ asset('/bower_components/materialize/dist/css/materialize.min.css') }}" rel="stylesheet"  type="text/css" media="screen,projection" />
  <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"  type="text/css" media="screen,projection" />
  <link href="{{ asset('/bower_components/animate.css/animate.min.css') }}" rel="stylesheet"  type="text/css" media="screen,projection" />
  <link href="{{ asset('/bower_components/sweetalert/lib/sweet-alert.css') }}" rel="stylesheet"  type="text/css" media="screen,projection" />
  <link href="{{ asset('/bower_components/owlcarousel/owl-carousel/owl.carousel.css') }}" rel="stylesheet"  media="screen,projection" />
  <link href="{{ asset('/bower_components/owlcarousel/owl-carousel/owl.transitions.css') }}" rel="stylesheet"  media="screen,projection" />
  <link href="{{ asset('/bower_components/owlcarousel/owl-carousel/owl.theme.css') }}" rel="stylesheet"  media="screen,projection" />
  <link href="{{ asset('/css/main.css') }}" rel="stylesheet" />
  <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('/css/colors/color1.css') }}" rel="stylesheet" />

</head>
<body>

  @include('partials.frontend.content')

  <!-- Javascript -->
  <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/bower_components/jquery.easing/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/bower_components/detect-mobile-browser/detectmobilebrowser.js') }}"></script>
  <script src="{{ asset('/bower_components/isotope/dist/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/bower_components/wow.js/dist/wow.min.js') }}"></script>
  <script src="{{ asset('/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('/bower_components/counter-up/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="{{ asset('/bower_components/gmaps/gmaps.min.js') }}"></script>
  <script src="{{ asset('/bower_components/owlcarousel/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/bower_components/materialize/dist/js/materialize.min.js') }}"></script>
  <script src="{{ asset('/bower_components/jwplayer/jwplayer.js') }}"></script>
  <script src="{{ asset('/bower_components/sweetalert/lib/sweet-alert.min.js') }}"></script>
  <script src="{{ asset('/js/common.js') }}"></script>
  <script src="{{ asset('/js/main.js') }}"></script>

</body>
</html>
