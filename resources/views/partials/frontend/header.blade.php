<header id="header" class="navbar navbar-fixed-top bg-white-only padder-v"  data-spy="affix" data-offset-top="1">
  <div class="container">
    <div class="navbar-header">
      <button class="btn btn-link visible-xs pull-right m-r" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <a href="#first" data-ride="scroll" class="navbar-brand m-r-lg"><img src="img/logo.png" class="m-r-sm hide"><span class="h3 font-bold">{{ $siteName }}</span></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav font-bold">
        <li><a href="#what" data-ride="scroll">Quienes Somos</a></li>
        <li><a href="#why" data-ride="scroll">Iglesia</a></li>
        <li><a href="#features" data-ride="scroll">Ministerios</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <div class="m-t-sm">
            <a href="{{ url('/auth/login') }}" class="btn btn-sm btn-success btn-rounded m-l"><strong>Login</strong></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</header>
