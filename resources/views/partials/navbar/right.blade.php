<ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
			<i class="icon-bell fa-fw"></i>
			<span class="visible-xs-inline">Notifications</span>
			<span class="badge badge-sm up bg-danger pull-right-xs">2</span>
		</a>
		<!-- dropdown -->
		<div class="dropdown-menu w-xl animated fadeInUp">
			<div class="panel bg-white">
				<div class="panel-heading b-light bg-light">
					<strong>You have <span>2</span> notifications</strong>
				</div>
				<div class="list-group">
					<a href class="media list-group-item">
						<span class="pull-left thumb-sm">
							<img src="{{ url('/img/migue.jpg') }}" alt="..." class="img-circle">
						</span>
						<span class="media-body block m-b-none">
							Use awesome animate.css<br>
							<small class="text-muted">10 minutes ago</small>
						</span>
					</a>
					<a href class="media list-group-item">
						<span class="media-body block m-b-none">
							1.0 initial released<br>
							<small class="text-muted">1 hour ago</small>
						</span>
					</a>
				</div>
				<div class="panel-footer text-sm">
					<a href class="pull-right"><i class="fa fa-cog"></i></a>
					<a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
				</div>
			</div>
		</div>
		<!-- / dropdown -->
	</li>
	<li class="dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
			<span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
				<img src="/img/{{Auth::user()->avatar}}" alt="...">
				<i class="on md b-white bottom"></i>
			</span>
			<span class="hidden-sm hidden-md">{{Auth::user()->fullname}}</span> <b class="caret"></b>
		</a>
		<!-- dropdown -->
		<ul class="dropdown-menu animated fadeInRight w">
			<li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
				<div>
					<p>300mb of 500mb used</p>
				</div>
				<div class="progress progress-xs m-b-none dker">
					<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
				</div>
			</li>
			<li>
				<a href>
					<span class="badge bg-danger pull-right">30%</span>
					<span>Settings</span>
				</a>
			</li>
			<li>
				<a ui-sref="app.page.profile">Profile</a>
			</li>
			<li>
				<a ui-sref="app.docs">
					<span class="label bg-info pull-right">new</span>
					Help
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="{{ url('/auth/logout') }}">Logout</a>
			</li>
		</ul>
		<!-- / dropdown -->
	</li>
</ul>
