@extends('app')

@section('content')

@include('partials.navbar.component')

@include('partials.aside.component')

<!-- content -->
<div id="content" class="app-content" role="main">
	<div class="app-content-body ">
		<div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="app.settings.asideFolded = false; app.settings.asideDock = false;">

			<!-- main -->
			<div class="col">

				<!-- main header -->
				@yield('mainContent')
				<!-- / main header -->

			</div>
			<!-- / main -->

		</div>
	</div>
</div>
@endsection
