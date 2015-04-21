<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Dashboard</title>
  <meta name="description" content="Angularjs, Html5, Music, Landing, 4 in 1 ui kits package" />
  <meta name="keywords" content="AngularJS, angular, bootstrap, admin, dashboard, panel, app, charts, bower_components,flat, responsive, layout, kit, ui, route, web, app, widgets" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/bower_components/animate.css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/bower_components/simple-line-icons/css/simple-line-icons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/css/font.css') }}" type="text/css') }}" />
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css') }}" />

</head>
<body>
<div class="app app-header-fixed  ">

  @yield('content')

  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
        <div class="wrapper b-t bg-light">
      <span class="pull-right">2.0.1 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
    	&copy; {{date('Y')}} Copyright.
    </div>
  </footer>
  <!-- / footer -->

</div>

<script src="{{ asset('/bower_components/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('/js/ui-load.js') }}"></script>
<script src="{{ asset('/js/ui-jp.config.js') }}"></script>
<script src="{{ asset('/js/ui-jp.js') }}"></script>
<script src="{{ asset('/js/ui-nav.js') }}"></script>
<script src="{{ asset('/js/ui-toggle.js') }}"></script>

</body>
</html>
