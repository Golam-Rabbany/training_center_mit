
<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="{{mix('css/app.css')}}">
<script src="https://cdn.tailwindcss.com"></script>

        @yield('data_table_css')

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="{{url('/')}}" class="logo">
					<img src="{{asset('dashboard/img/icon.png')}}" width="35" height="35" alt=""> <span>MMITSOFT</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{asset('dashboard/img/avatar.png')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>{{Auth::user()->name}}</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                    @if (Auth::user()->role == 0)
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="{{route('backend.index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>

						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{route('banner.index')}}">View Banner</a></li>
								<li><a href="{{route('banner.create')}}">Create Banner</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Course </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{route('course.index')}}">View Courses</a></li>
								<li><a href="{{route('course.create')}}">Create Courses</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Student </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{route('student.index')}}">View Student</a></li>
								<li><a href="{{route('student.create')}}">Create Student</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Teacher </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{route('teacher.index')}}">View Teacher</a></li>
								<li><a href="{{route('teacher.create')}}">Create Teacher</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Payment </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{route('payment.index')}}">View Payment</a></li>
								<li><a href="{{route('payment.create')}}">Create Payment</a></li>
							</ul>
						</li>

                    @else
                            
                        
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>

                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">

            @yield('dashboard')
            
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('dashboard/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('dashboard/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('dashboard/js/Chart.bundle.js')}}"></script>
    <script src="{{asset('dashboard/js/chart.js')}}"></script>
    <script src="{{asset('dashboard/js/app.js')}}"></script>
    @yield('js')

    @yield('data_table_js')

</body>


<!-- index22:59-->
</html>

