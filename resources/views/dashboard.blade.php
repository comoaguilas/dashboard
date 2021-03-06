@extends('app')

@section('body-class', 'class="toggled sw-toggled"')
@section('content')
<header id="header">
<ul class="header-inner">
  <li id="menu-trigger" data-trigger="#sidebar">
    <div class="line-wrap">
      <div class="line top"></div>
      <div class="line center"></div>
      <div class="line bottom"></div>
    </div>
  </li>

  <li class="logo hidden-xs">
    <a href="{{ url('dashboard') }}"><i class="md md-blur-on"></i> {{$siteName}}
  </li>

  <li class="pull-right">
    <ul class="top-menu">

      <li id="top-search">
        <a class="tm-search" href=""></a>
      </li>
      <li class="dropdown">
        <a data-toggle="dropdown" class="tm-message" href=""><i class="tmn-counts">6</i></a>
        <div class="dropdown-menu dropdown-menu-lg pull-right">
          <div class="listview">
            <div class="lv-header">
              Messages
            </div>
            <div class="lv-body c-overflow">
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">David Belle</div>
                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Jonathan Morris</div>
                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Fredric Mitchell Jr.</div>
                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Glenn Jecobs</div>
                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Bill Phillips</div>
                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                  </div>
                </div>
              </a>
            </div>
            <a class="lv-footer" href="">View All</a>
          </div>
        </div>
      </li>
      <li class="dropdown">
        <a data-toggle="dropdown" class="tm-notification" href=""><i class="tmn-counts">9</i></a>
        <div class="dropdown-menu dropdown-menu-lg pull-right">
          <div class="listview" id="notifications">
            <div class="lv-header">
              Notification

              <ul class="actions">
                <li class="dropdown">
                  <a href="" data-clear="notification">
                    <i class="md md-done-all"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="lv-body c-overflow">
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">David Belle</div>
                    <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Jonathan Morris</div>
                    <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Fredric Mitchell Jr.</div>
                    <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Glenn Jecobs</div>
                    <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                  </div>
                </div>
              </a>
              <a class="lv-item" href="">
                <div class="media">
                  <div class="pull-left">
                    <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="lv-title">Bill Phillips</div>
                    <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                  </div>
                </div>
              </a>
            </div>

            <a class="lv-footer" href="">View Previous</a>
          </div>

        </div>
      </li>
      <li class="dropdown hidden-xs">
        <a data-toggle="dropdown" class="tm-task" href=""><i class="tmn-counts">2</i></a>
        <div class="dropdown-menu pull-right dropdown-menu-lg">
          <div class="listview">
            <div class="lv-header">
              Tasks
            </div>
            <div class="lv-body">
              <div class="lv-item">
                <div class="lv-title m-b-5">HTML5 Validation Report</div>

                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95% Complete (success)</span>
                  </div>
                </div>
              </div>
              <div class="lv-item">
                <div class="lv-title m-b-5">Google Chrome Extension</div>

                <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete (success)</span>
                  </div>
                </div>
              </div>
              <div class="lv-item">
                <div class="lv-title m-b-5">Social Intranet Projects</div>

                <div class="progress">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                    <span class="sr-only">20% Complete</span>
                  </div>
                </div>
              </div>
              <div class="lv-item">
                <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
              </div>
              <div class="lv-item">
                <div class="lv-title m-b-5">Youtube Client App</div>

                <div class="progress">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete (danger)</span>
                  </div>
                </div>
              </div>
            </div>

            <a class="lv-footer" href="">View All</a>
          </div>
        </div>
      </li>
      <li class="dropdown">
        <a data-toggle="dropdown" class="tm-settings" href=""></a>
        <ul class="dropdown-menu dm-icon pull-right">
          <li>
            <a data-action="fullscreen" href=""><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
          </li>
          <li>
            <a data-action="clear-localstorage" href=""><i class="md md-delete"></i> Clear Local Storage</a>
          </li>
          <li>
            <a href=""><i class="md md-person"></i> Privacy Settings</a>
          </li>
          <li>
            <a href=""><i class="md md-settings"></i> Other Settings</a>
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<!-- Top Search Content -->
<div id="top-search-wrap">
  <input type="text">
  <i id="top-search-close">&times;</i>
</div>
</header>

<section id="main">
  <aside id="sidebar">
    <div class="sidebar-inner">
      <div class="si-inner">
        <div class="profile-menu">
          <a href="">
            <div class="profile-pic"><img src="/img/contacts/{{Auth::user()->avatar}}" alt=""> </div>
            <div class="profile-info">{{Auth::user()->fullname}}<i class="md md-arrow-drop-down"></i> </div>
          </a>

          <ul class="main-menu">
            <li>
              <a href="profile-about.html"><i class="md md-person"></i> View Profile</a>
            </li>
            <li>
              <a href=""><i class="md md-settings-input-antenna"></i> Privacy Settings</a>
            </li>
            <li>
              <a href=""><i class="md md-settings"></i> Settings</a>
            </li>
            <li>
              <a href="{{ url('/auth/logout') }}"><i class="md md-history"></i> Logout</a>
            </li>
          </ul>
        </div>

        <ul class="main-menu">
          <li class="active"><a href="index.html"><i class="md md-home"></i> Home</a></li>
          <li><a href="typography.html"><i class="md md-format-underline"></i> Typography</a></li>
          <li class="sub-menu">
            <a href=""><i class="md md-now-widgets"></i> Widgets</a>

            <ul>
              <li><a href="widget-templates.html">Templates</a></li>
              <li><a class="active" href="widgets.html">Widgets</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href=""><i class="md md-view-list"></i> Tables</a>

            <ul>
              <li><a href="tables.html">Normal Tables</a></li>
              <li><a href="data-tables.html">Data Tables</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href=""><i class="md md-my-library-books"></i> Forms</a>

            <ul>
              <li><a href="form-elements.html">Basic Form Elements</a></li>
              <li><a href="form-components.html">Form Components</a></li>
              <li><a href="form-examples.html">Form Examples</a></li>
              <li><a href="form-validations.html">Form Validation</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href=""><i class="md md-swap-calls"></i>User Interface</a>
            <ul>
              <li><a href="colors.html">Colors</a></li>
              <li><a href="animations.html">Animations</a></li>
              <li><a href="box-shadow.html">Box Shadow</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="icons.html">Icons</a></li>
              <li><a href="alerts.html">Alerts</a></li>
              <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
              <li><a href="media.html">Media</a></li>
              <li><a href="components.html">Components</a></li>
              <li><a href="other-components.html">Others</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href=""><i class="md md-trending-up"></i>Charts</a>
            <ul>
              <li><a href="flot-charts.html">Flot Charts</a></li>
              <li><a href="other-charts.html">Other Charts</a></li>
            </ul>
          </li>
          <li><a href="calendar.html"><i class="md md-today"></i> Calendar</a></li>
          <li><a href="generic-classes.html"><i class="md md-layers"></i> Generic Classes</a></li>
          <li class="sub-menu">
            <a href=""><i class="md md-content-copy"></i> Sample Pages</a>
            <ul>
              <li><a href="profile-about.html">Profile</a></li>
              <li><a href="list-view.html">List View</a></li>
              <li><a href="messages.html">Messages</a></li>
              <li><a href="login.html">Login and Sign Up</a></li>
              <li><a href="404.html">Error 404</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </aside>

  <section id="content">
    <div class="container">
      <div class="block-header">
        <h2>Dashboard</h2>

        <ul class="actions">
          <li>
            <a href="">
              <i class="md md-trending-up"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="md md-done-all"></i>
            </a>
          </li>
          <li class="dropdown">
            <a href="" data-toggle="dropdown">
              <i class="md md-more-vert"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <a href="">Refresh</a>
              </li>
              <li>
                <a href="">Manage Widgets</a>
              </li>
              <li>
                <a href="">Widgets Settings</a>
              </li>
            </ul>
          </li>
        </ul>

      </div>
		<!-- here content-->
  </section>

</section>
@endsection
