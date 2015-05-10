@extends('app')

@section('content')

  <!-- Login -->
  <div class="lc-block toggled" id="l-login">
    {!! Form::open(array('name' => 'form', 'class' => 'form-validation form-horizontal', 'role' => 'form')) !!}

      <div class="text-danger wrapper text-center">
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

      <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="md md-person"></i></span>
          <div class="fg-line">
            <input type="email" placeholder="Email" class="form-control no-border" name="email" value="{{ old('email') }}" >
          </div>
      </div>

      <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="md md-accessibility"></i></span>
        <div class="fg-line">
          <input type="password" placeholder="Password" class="form-control no-border" name="password" >
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="checkbox">
        <label>
          <input type="checkbox" value="">
          <i class="input-helper"></i>
          Keep me signed in
        </label>
      </div>

      <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>

      <ul class="login-navigation">
        <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
      </ul>
    </div>
  </form>

  <!-- Forgot Password -->
  <div class="lc-block" id="l-forget-password">
      <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

      <div class="input-group m-b-20">
          <span class="input-group-addon"><i class="md md-email"></i></span>
          <div class="fg-line">
              <input type="text" class="form-control" placeholder="Email Address">
          </div>
      </div>

      <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>

      <ul class="login-navigation">
          <li data-block="#l-login" class="bgm-green">Login</li>
      </ul>
  </div>

<!-- <div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
  <a href class="navbar-brand block m-t">Angulr</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>Sign in to get in touch</strong>
    </div>
    {!! Form::open(array('name' => 'form', 'class' => 'form-validation form-horizontal', 'role' => 'form')) !!}
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
          <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" name="email" value="{{ old('email') }}" >
        </div>
        <div class="list-group-item">
        	<input type="password" placeholder="Password" class="form-control no-border" ng-model="user.password" class="form-control" name="password" >
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="login()" ng-disabled='form.$invalid'>Log in</button>
      <div class="text-center m-t m-b"><a href="{{ url('/password/email') }}">Forgot password?</a></div>
      <div class="line line-dashed"></div>
    </form>
  </div>
</div> -->

@endsection
