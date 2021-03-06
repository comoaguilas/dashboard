<div class="clearfix hidden-xs text-center hide " id="aside-user">
	<div class="dropdown wrapper">
		<a href="app.page.profile">
			<span class="thumb-lg w-auto-folded avatar m-t-sm">
				<img src="/img/{{Auth::user()->avatar}}" class="img-full" alt="...">
			</span>
		</a>
		<a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
			<span class="clear">
				<span class="block m-t-sm">
					<strong class="font-bold text-lt">{{Auth::user()->fullname}}</strong>
					<b class="caret"></b>
				</span>
				<span class="text-muted text-xs block">{{Auth::user()->title}}</span>
			</span>
		</a>
		<!-- dropdown -->
		<ul class="dropdown-menu animated fadeInRight w hidden-folded">
			<li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
				<span class="arrow top hidden-folded arrow-info"></span>
				<div>
					<p>300mb of 500mb used</p>
				</div>
				<div class="progress progress-xs m-b-none dker">
					<div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
				</div>
			</li>
			<li>
				<a href>Settings</a>
			</li>
			<li>
				<a href="page_profile.html">Profile</a>
			</li>
			<li>
				<a href>
					<span class="badge bg-danger pull-right">3</span>
					Notifications
				</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="{{ url('/auth/logout') }}">Logout</a>
			</li>
		</ul>
		<!-- / dropdown -->
	</div>
	<div class="line dk hidden-folded"></div>
</div>
