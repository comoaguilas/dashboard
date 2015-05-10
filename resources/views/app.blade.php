<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
  <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, bower_components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="{{ asset('/bower_components/animate.css/animate.css') }}" type="text/css" />
  <link href="{{ asset('/vendors/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendors/material-icons/material-design-iconic-font.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendors/socicon/socicon.min.css') }}" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css') }}" />

</head>
<body class="login-content">

  @yield('content')

  <!-- Javascript -->
  <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
  <script src="{{ asset('/vendors/waves/waves.min.js') }}"></script>
  <script src="{{ asset('/js/functions.js') }}"></script>

</body>
</html>
