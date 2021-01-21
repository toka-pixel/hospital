<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2020 16:23:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->

	<link rel="shortcut icon" type="../../control/image/png" href="../../control/images/fav.png">

	<link rel="shortcut icon" type="../../control/image/png" href="images/fav.png">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../../control/css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="../../control/css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="../../control/css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../../control/css/styles.css">



	<link rel="stylesheet" href="../../control/css/red.css" id="style_theme">
	<link rel="stylesheet" href="../../control/css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="../../control/charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="../../control/css/jquery-jvectormap.css">

	<script src="../../control/js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>

	

	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">

				<a href="/contro"><img src="../../control/images/logo.png" class="logo" alt="logo"></a>

				

			</div>
			<ul class="list-unstyled components">
				<li>
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="true">
						<span class="ti-home"></span> Dashboard
					</a>
					<ul class="collapse list-unstyled show" id="nav-dashboard">
						
						
					</ul>
				</li>
				<li>
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="ti-wheelchair"></span> Patients
					</a>
					<ul class="collapse list-unstyled" id="nav-patients">
						
						
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Doctors
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						
						
						
					</ul>
				</li>
				<li>
					<a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
						<span class="ti-pencil-alt"></span> Appointments
					</a>
					<ul class="collapse list-unstyled" id="nav-appointment">
						

					</ul>
				</li>
				
			
			
				

				
				

			
			</ul>
			<div class="nav-help animated fadeIn">
				<h5><span class="ti-comments"></span> Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> +1 1234 567 890</h6>
				<h6>
					<span class="ti-email"></span> email@site.com</h6>
				<p class="copyright-text">Copy rights &copy; 2018</p>
			</div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">

                    <a href="index-2.html"><img src="../../control/images/logo-dark.png" class="logo" alt="logo"></a>

						

					</div>
					<ul class="nav">
						<li class="nav-item">
							<span class="ti-menu" id="sidebarCollapse"></span>
						</li>
						<li class="nav-item">
							<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
						</li>
						<li class="nav-item">
							<a  data-toggle="modal" data-target=".proclinic-modal-lg">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">

													<input type="text" class="form-control" id="search-term" placeholder="Type text here">

													<input type="text" class="form-../../control" id="search-term" placeholder="Type text here">

													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="/logoutEmp">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				
				</div>
			</nav>

			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class=" home">


			  @yield('home')

			</div>
			@yield("edit&show")
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>

			


			
		

	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	
	<!-- Jquery Library-->
	<script src="../../control/js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="../../control/js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="../../control/js/bootstrap.min.js"></script>
	<!-- morris charts -->
	<script src="../../control/charts/js/raphael-min.js"></script>
	<script src="../../control/charts/js/morris.min.js"></script>
	<script src="../../control/js/custom-morris.js"></script>

	<!-- Custom Script-->
	<script src="../../control/js/custom.js"></script>
</body>



<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Dec 2020 16:23:41 GMT -->



</html>