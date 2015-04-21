@extends('app')

@section('content')
<div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">Angulr</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Sign in to get in touch</strong>
    </div>
		<form name="form" class="form-validation" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
      <div class="text-danger wrapper text-center" ng-show="authError">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="list-group-item">
        	<input type="password" placeholder="Password" class="form-control no-border" ng-model="user.password" class="form-control" name="password" required>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="login()" ng-disabled='form.$invalid'>Log in</button>
      <div class="text-center m-t m-b"><a {{ url('/password/email') }}>Forgot password?</a></div>
      <div class="line line-dashed"></div>
    </form>
  </div>
</div>
@endsection
