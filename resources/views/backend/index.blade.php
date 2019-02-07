<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/backend/admin.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/backend/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/backend/skins/_all-skins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="z-index: 9999 !important">

  	<header class="main-header navbar-fixed-top">
    	<!-- Logo -->
    	<a href="index2.html" class="logo">
      		<!-- mini logo for sidebar mini 50x50 pixels -->
      		<span class="logo-mini"><b>A</b>LT</span>
      		<!-- logo for regular state and mobile devices -->
      		<span class="logo-lg"><b>Admin</b>LTE</span>
    	</a>
	    <!-- Header Navbar: style can be found in header.less -->
	    <nav class="navbar navbar-static-top">
	      	<!-- Sidebar toggle button-->
	      	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="position: absolute; left: 0">
	        	<span class="sr-only">Toggle navigation</span>
	      	</a>
	      	<div class="navbar-custom-menu" style="position: absolute; right: 0">
	        	<ul class="nav navbar-nav">
	          		<!-- User Account: style can be found in dropdown.less -->
	          		<li class="dropdown user user-menu">
	            		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              			<img src="{{URL::asset('/uploads/admin.jpg')}}" class="user-image" alt="User Image">
	              			<span class="hidden-xs">Alexander Pierce</span>
	            		</a>
		            	<ul class="dropdown-menu">
			              	<!-- Menu Footer-->
			              	<li class="user-footer">
			                  	<a href="#" class="btn btn-default btn-flat">Profile</a>
			                  	<a href="#" class="btn btn-default btn-flat">Sign out</a>
			              	</li>
			            </ul>
			        </li>
	            </ul>
	      	</div>
	    </nav>
	</header>
  	<!-- Left side column. contains the logo and sidebar -->
  	<aside class="main-sidebar navbar-fixed-top">
    	<!-- sidebar: style can be found in sidebar.less -->
    	<section class="sidebar">
      		<!-- Sidebar user panel -->
      		<div class="user-panel">
        		<div class="pull-left image">
          			<img src="{{URL::asset('/uploads/admin.jpg')}}" class="img-circle" alt="User Image">
        		</div>
        		<div class="pull-left info">
          			<p>Alexander Pierce</p>
          			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        		</div>
      		</div>
      
      		<!-- sidebar menu: : style can be found in sidebar.less -->
      		<ul class="sidebar-menu" data-widget="tree">
        		<li class="header">MAIN NAVIGATION</li>
        		<li class="active">
          			<a href="{{ route('adminfoodmenu') }}">
            			<i class="fa fa-dashboard"></i> <span>Food Menu</span>
            			<!-- <span class="pull-right-container">
              				<i class="fa fa-angle-right pull-right"></i>
            			</span> -->
          			</a>
        		</li>
        		<li>
          			<a href="{{ route('adminbooktable') }}">
            			<i class="fa fa-table"></i> <span>Book Table</span>
            			<!-- <span class="pull-right-container">
              				<i class="fa fa-angle-right pull-right"></i>
            			</span> -->
          			</a>
        		</li>
        		<li>
          			<a href="{{ route('adminfoodblog') }}">
            			<i class="fa fa-dashboard"></i> <span>Food Blog</span>
            			<!-- <span class="pull-right-container">
              				<i class="fa fa-angle-right pull-right"></i>
            			</span> -->
          			</a>
        		</li>
      		</ul>
    	</section>
    	<!-- /.sidebar -->
  	</aside>

  	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
    	<!-- Content Header (Page header) -->
    	<section class="content-header">
    		<h1>@yield('title')</h1>
	      	@yield('content')
	      	<ol class="breadcrumb">
	        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        	<li class="active">Dashboard</li>
	      	</ol>
	    </section>	
  	</div>
  	<!-- /.content-wrapper -->
  	<footer class="main-footer">
    	<div class="pull-right hidden-xs">
      		<b>Version</b> 2.4.0
    	</div>
    	<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
  	</footer>

  
  	<!-- /.control-sidebar -->
  	<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- AdminLTE App -->
<script src="{{URL::asset('/js/backend/adminlte.js')}}"></script>

</body>
</html>