<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="assets/img/favicon.png">

	<title>AHEAD CRM SYSTEM</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

	<!-- CSS - REQUIRED - START -->
	<!-- Batch Icons -->
	<link rel="stylesheet" href="/../../assets/fonts/batch-icons/css/batch-icons.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="/../../assets/css/bootstrap/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="/../../assets/css/bootstrap/mdb.min.css">
	<!-- Custom Scrollbar -->
	<link rel="stylesheet" href="/../../assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css">
	<!-- Hamburger Menu -->
	<link rel="stylesheet" href="/../../assets/css/hamburgers/hamburgers.css">

	
	<link rel="stylesheet" href="/../../assets/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../../assets/plugins/datatables/css/responsive.dataTables.min.css">
	<link rel="stylesheet" href="/../../assets/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="/../../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
	<link rel="stylesheet" href="/../../assets/css/quillpro/quillpro.css">
	<link href="/assets/bootstrap-multiselect-0.9.13/css/bootstrap-multiselect.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
				<ul class="nav nav-pills flex-column">
					<li class="logo-nav-item">
						<a class="navbar-brand" href="#">
							<p style="font: sans-serif;">AHEAD CRM SYSTEM</p>
						</a>

					</li>
					<li>
						<h6 class="nav-header">Main</h6>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="starter-kit.html">
							<i class="batch-icon batch-icon-star"></i>
							Dashboard
						</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="fa fa-gears"></i>
							Maintenance
						</a>
						<ul class="nav nav-pills flex-column">							
							<li class="nav-item">
								<a class="nav-link nav-parent" href="#">User</a>
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link" href="/roles">Role</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/company">Company</a>
									</li>									
									<li class="nav-item">
										<a class="nav-link" href="/branches">Branch</a>
									</li>									
									<li class="nav-item">
										<a class="nav-link" href="/users">Users</a>
									</li>
								</ul>
							</li>			
							<li class="nav-item">
								<a class="nav-link nav-parent" href="#">Advertisement</a>
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a class="nav-link" href="/adstype">Ads Types</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/itemtype">Item Types</a>
									</li>									
									<li class="nav-item">
										<a class="nav-link" href="/adsapprover">Ads Approvers</a>
									</li>
								</ul>
							</li>						
						</ul>
					</li>							
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="fa fa-image"></i>
							Ads
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link" href="/ads/create"><i class="fa fa-plus"></i> Create</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/ads"><i class="fa fa-eye"></i> View lists</a>
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="/ads_forapproval"><i class="fa fa-eye"></i> For Approval</a>
							</li>								
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="fa fa-users"></i>
							People Count
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link" href="/people_count"><i class="fa fa-plus"></i> People Count</a>
							</li>								
						</ul>
					</li>		
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="fa fa-image"></i>
							Leads
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-cart-plus"></i> Store</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-cloud"></i> Web</a>
							</li>								
						</ul>
					</li>	
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="fa fa-file"></i>
							Sales Reports
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-file"></i> Company Sales</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-file"></i> Client Sales </a>
							</li>							
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-file"></i> Product Sales </a>
							</li>							
						</ul>
					</li>	
					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="fa fa-file"></i>
							Other Reports
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-balance-scale"></i> Survey</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fa fa-child"></i> People Count </a>
							</li>														
						</ul>
					</li>	
				</ul>
			</nav>
			<div class="right-column">
				<nav class="navbar navbar-expand-lg navbar-light bg-white">
					<a class="navbar-brand d-block d-sm-block d-md-block d-lg-none" href="#">
						<img src="assets/img/logo-dark.png" width="145" height="32.3" alt="QuillPro">
					</a>
					<button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<!-- Added Mobile-Only Menu -->
					<ul class="navbar-nav ml-auto mobile-only-control d-block d-sm-block d-md-block d-lg-none">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbar-notification-search-mobile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
								<i class="batch-icon batch-icon-search"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search-mobile">
								<li>
									<form class="form-inline my-2 my-lg-0 no-waves-effect">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." aria-describedby="basic-addon2">
											<div class="input-group-append">
												<button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">
													<i class="batch-icon batch-icon-search"></i>
												</button>
											</div>
										</div>
									</form>
								</li>
							</ul>
						</li>
					</ul>

					<!--  DEPRECATED CODE:
						<div class="navbar-collapse" id="navbarSupportedContent">
					-->
					<!-- USE THIS CODE Instead of the Commented Code Above -->
					<!-- .collapse added to the element -->
					<div class="collapse navbar-collapse" id="navbar-header-content">
						<ul class="navbar-nav navbar-language-translation mr-auto">
							
						</ul>
						<ul class="navbar-nav navbar-notifications float-right">										
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-misc" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<i class="batch-icon batch-icon-bell"></i>
									<span class="notification-number">1</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-right dropdown-menu-md" aria-labelledby="navbar-notification-misc">
									<li class="media">
										<a href="task-list.html">
											<i class="batch-icon batch-icon-bell batch-icon-xl d-flex mr-3"></i>
											<div class="media-body">
												<h6 class="mt-0 mb-1 notification-heading">Ads Response</h6>
												<div class="notification-text">
													You have 55 new response from your ads
												</div>
												<span class="notification-time">Just now</span>
											</div>
										</a>
									</li>									
								</ul>
							</li>
						</ul>
						<ul class="navbar-nav ml-5 navbar-profile">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<div class="profile-name">
										ADMINISTRATOR
									</div>								
								</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">
									<li><a class="dropdown-item" href="profiles-member-profile.html">Profile</a></li>
									<li>
										<a class="dropdown-item" href="mail-inbox.html">
											Messages 
											<span class="badge badge-danger badge-pill float-right">3</span>
										</a>
									</li>
									<li><a class="dropdown-item" href="profiles-member-profile.html">Settings</a></li>
									<li><a class="dropdown-item" href="sisu-lock-screen.html">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<main class="main-content p-5" role="main">
					@section('main-body')
					@show		
					<div class="row mb-4">
						<div class="col-md-12">
							<footer>
								<!-- CHASE TECHNOLOGIES CORPORATION 2018 -->
							</footer>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="/../../assets/js/jquery/jquery-3.1.1.min.js"></script>
	<!-- Popper.js - Bootstrap tooltips -->
	<script type="text/javascript" src="/../../assets/js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="/../../assets/js/bootstrap/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="/../../assets/js/bootstrap/mdb.min.js"></script>
	<!-- Velocity -->
	<script type="text/javascript" src="/../../assets/plugins/velocity/velocity.min.js"></script>
	<script type="text/javascript" src="/../../assets/plugins/velocity/velocity.ui.min.js"></script>
	<!-- Custom Scrollbar -->
	<script type="text/javascript" src="/../../assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- jQuery Visible -->
	<script type="text/javascript" src="/../../assets/plugins/jquery_visible/jquery.visible.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script type="text/javascript" src="/../../assets/js/misc/ie10-viewport-bug-workaround.js"></script>

	
	<script type="text/javascript" src="/../../assets/js/misc/holder.min.js"></script>

	<script type="text/javascript" src="/../../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="/../../assets/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="/../../assets/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="/../../assets/plugins/sweetalert/sweetalert.min.js"></script>	
	<script type="text/javascript" src="/../../assets/js/scripts.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
	<script src="/assets/bootstrap-multiselect-0.9.13/js/bootstrap-multiselect.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			@section('script-body')
			@show
		});
	</script>
	<script type="text/javascript">
      	$.ajaxSetup({
        	headers: {
    	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}
      });
  	</script>    			



</body>

</html>
