@extends('app')

@section('body-class', 'class="login-content"')
@section('content')

  <!-- Login -->
  <div class="lc-block toggled" id="l-login">
    {!! Form::open(array('name' => 'form', 'class' => 'form-validation form-horizontal', 'role' => 'form')) !!}

				@if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <a href="" class="alert-link">Whoops! </a> There were some problems with your input.
						<ul class="clist clist-check">
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
          </div>

				@endif


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

      <button type="submit" class="btn btn-login btn-danger btn-float" ><i class="md md-arrow-forward"></i></button>

      <ul class="login-navigation">
        <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
      </ul>
    </form>
  </div>

  <!-- Forgot Password -->
  <div class="lc-block" id="l-forget-password">
    {!! Form::open(array('name' => 'form', 'class' => 'form-validation form-horizontal', 'role' => 'form')) !!}
      <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
      <div class="input-group m-b-20">
        <span class="input-group-addon"><i class="md md-email"></i></span>
        <div class="fg-line">
          <input type="text" class="form-control" placeholder="Email Address">
        </div>
      </div>

      <button type="submit" class="btn btn-login btn-danger btn-float" ><i class="md md-arrow-forward"></i></button>

      <ul class="login-navigation">
        <li data-block="#l-login" class="bgm-green">Login</li>
      </ul>
    </form>
  </div>

@endsection
