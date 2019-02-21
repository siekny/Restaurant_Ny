<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Restaurant</title>
	<link type="image/x-icon" rel="shortcut icon" href="{{URL::asset('/uploads/favicon.png')}}" alt="123">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/frontend/style.css')}}">

	<script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	
	
</head>
<body>
	
	<div class="wrapper">
		<header id="header" class="" style="z-index: 999" >
			<nav class="navbar navbar-default navbar-fixed-top">
		        <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="#">Brand</a>
		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            
		       
		                <ul class="nav navbar-nav navbar-right">
		                	<li><a href="{{ route('homepage') }}">Home</a></li>
		                    <li class="dropdown">
		                    	<a href="http://localhost:8000/menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Menu <span class="caret"></span></a>
		                    	
		                    </li>
		           
		                    <li><a href="http://localhost:8000/reservation">About</a></li>
		                    <li><a href="http://localhost:8000/about">Contact</a></li>
		                    
		                    <!-- <li><a href="/contact">Contact</a></li> -->
		                    <li style="display: none;" id="charge">  
		                    	<button style="margin-top: 12px;" class="btn btn-success pull-right" id="buttonAdd"><span id="cart">9 </span> Charge
		                    	</button>
		                    </li>
		                </ul>

		            </div><!-- /.navbar-collapse -->
		        </div><!-- /.container-fluid -->
		    </nav>
		    <div class="text-main-img">
		    	
		    </div>
		</header><!-- /header -->
		<div class="content">
			<div class="col-md-12">
				<h2 style="margin-left: 15px; color: #6c6862; font-weight: bold; font-family: cursive">List of {{ $foodblogs->blogName }}</h2>
			</div>
			<div class="col-md-12">

				@foreach($foodmenus as $foodmenu)
					@if($foodmenu->count() == 0)
						<h1>null</h1>
					@else
						<div class="col-md-3">
							<div class="thumbnail" style="box-shadow: 3px 3px 6px #e4e0e0; border: none !important">
					            <img src="{{URL::asset('/uploads/picture/')}}/{{ $foodmenu->image }}" alt="">
				              	<div class="caption">
				                	<h4 style="float: left; color: #E75730">{{ $foodmenu->foodName }}</h4>
				                	<h4 style="float: right; color: #E75730; border-radius: 50%; border: 2px solid #E75730; padding: 10px 15px; margin-top: -8px;">$ {{ $foodmenu->price }}</h4>
				                	<p style="clear: both; font-size: 12px">{{ $foodmenu->description }}</p>
				                	
				            	</div>
					          </div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
</body>
</html>