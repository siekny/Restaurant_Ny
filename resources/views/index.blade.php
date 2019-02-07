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
	
	<div class="wrapper" style="background: url({{URL::asset('/uploads/main-img.jpg')}});height: 500px">
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
		                	<li><a href="http://localhost:8000/home">Home</a></li>
		                    <li class="dropdown">
		                    	<a href="http://localhost:8000/menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Menu <span class="caret"></span></a>
		                    	<ul class="dropdown-menu">
	                    			<li><a href="http://localhost:8000/allmenu/1"> Khmer Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/3"> Thai Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/4"> Korean Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/5"> Japanese </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/6"> chinese food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/7"> test </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/8"> Testing </a></li>
		                    					                    		
		                        </ul>
		                    </li>
		                    <li class="dropdown">
		                    	<a href="http://localhost:8000/menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Blog <span class="caret"></span></a>
		                    	<ul class="dropdown-menu">
	                    			<li><a href="http://localhost:8000/allmenu/1"> Khmer Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/3"> Thai Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/4"> Korean Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/5"> Japanese </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/6"> chinese food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/7"> test </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/8"> Testing </a></li>
		                    					                    		
		                        </ul>
		                    </li>
		                    <li class="dropdown">
		                    	<a href="http://localhost:8000/menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Page <span class="caret"></span></a>
		                    	<ul class="dropdown-menu">
	                    			<li><a href="http://localhost:8000/allmenu/1"> Khmer Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/3"> Thai Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/4"> Korean Food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/5"> Japanese </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/6"> chinese food </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/7"> test </a></li>
	                    			<li><a href="http://localhost:8000/allmenu/8"> Testing </a></li>
		                    					                    		
		                        </ul>
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
		    	<div class="container">
		    		<div class="text-main-img_in text-center col-md-8 col-md-offset-2">
		    			<img src="{{URL::asset('/uploads/favicon.png')}}" alt="">
		    			<h2>Loves Healthy food</h2>
		    			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		    			<input type="button" class="btn-menu" value="TODAY'S MENU">
		    		</div>
		    		
		    	</div>
		    </div>
		</header><!-- /header -->
		<div class="content">
			<!-- our menu -->
			<div class="content-in content-ourblog">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2>Our Menu</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page. It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
						<div class="col-md-12">
							<div class="item col-sm-6 col-md-6 list-group-item">
							    <div class="thumbnail">
							      	<img class="group list-group-image" src="{{URL::asset('/uploads/1.jpg')}}" alt="..." style="height: 40% !important">
							      	<div class="caption">
							        	<h4 class="group inner list-group-item-heading">Blog Title Here</h4>
							        	<span>May 20th / By Admin</span>
							        	<p class="group inner list-group-item-text">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
							        	<div class="row">
					                        <div class="col-xs-12 col-md-6 menu-price">
					                            <p class="lead">$21.000</p>
					                        </div>
					                    </div>
							      	</div>
							    </div>
							</div>
							<div class="item col-sm-6 col-md-6 list-group-item">
							    <div class="thumbnail">
							      	<img class="group list-group-image" src="{{URL::asset('/uploads/2.jpg')}}" alt="..." style="height: 40% !important">
							      	<div class="caption">
							        	<h4 class="group inner list-group-item-heading">Blog Title Here</h4>
							        	<span>May 20th / By Admin</span>
							        	<p class="group inner list-group-item-text">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
							        	<div class="row">
					                        <div class="col-xs-12 col-md-6 menu-price">
					                            <p class="lead">$21.000</p>
					                        </div>
					                    </div>
							      	</div>
							    </div>
							</div>
							<div class="item col-sm-6 col-md-6 list-group-item">
							    <div class="thumbnail">
							      	<img class="group list-group-image" src="{{URL::asset('/uploads/3.jpg')}}" alt="..." style="height: 40% !important">
							      	<div class="caption">
							        	<h4 class="group inner list-group-item-heading">Blog Title Here</h4>
							        	<span>May 20th / By Admin</span>
							        	<p class="group inner list-group-item-text">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
							        	<div class="row">
					                        <div class="col-xs-12 col-md-6 menu-price">
					                            <p class="lead">$21.000</p>
					                        </div>
					                    </div>
							      	</div>
							    </div>
							</div>
							<div class="item col-sm-6 col-md-6 list-group-item">
							    <div class="thumbnail">
							      	<img class="group list-group-image" src="{{URL::asset('/uploads/1.jpg')}}" alt="..." style="height: 40% !important">
							      	<div class="caption">
							        	<h4 class="group inner list-group-item-heading">Blog Title Here</h4>
							        	<span>May 20th / By Admin</span>
							        	<p class="group inner list-group-item-text">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
							        	<div class="row">
					                        <div class="col-xs-12 col-md-6 menu-price">
					                            <p class="lead">$21.000</p>
					                        </div>
					                    </div>
							      	</div>
							    </div>
							</div>
						</div>
						
					</div>
				</div>
			</div>

			<!-- book your table -->
			<div class="content-in content-booktable" style="background: url({{URL::asset('/uploads/booktable.jpg')}});">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2>Book Your Table</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page. It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
						<div class="col-md-12">
							<div class="col-sm-6 col-md-4 inner-addon right-addon">
								<i class="glyphicon glyphicon-user"></i>
							    <input type="text" name="name" class="form-control" placeholder="Name">
							    
							</div>
							<div class="col-sm-6 col-md-4 inner-addon right-addon">
								<i class="fa fa-envelope"></i>
							    <input type="email" name="email" class="form-control" placeholder="Email">
							</div>
							<div class="col-sm-6 col-md-4 inner-addon right-addon">
								<i class="glyphicon glyphicon-earphone"></i>
							    <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">
							</div>
						</div>
						<div class="col-md-12" style="margin-top: 20px">
							<div class="col-sm-6 col-md-4 inner-addon right-addon">
								<i class="glyphicon glyphicon-calendar"></i>
								<input placeholder="Date" name="date" class="form-control" type="text" onfocus="(this.type='date')" onchange="(this.type='text')"  id="date"> 
							</div>
							<div class="col-sm-6 col-md-4 inner-addon right-addon">
								<i class="glyphicon glyphicon-time"></i>
							    <input type="text" name="time" class="form-control" placeholder="Time"  onfocus="(this.type='time')" onchange="(this.type='text')">
							</div>
							<div class="col-sm-6 col-md-4 inner-addon right-addon">
								<i class="fa fa-group"></i>
							    <input type="text" name="number_persons" class="form-control" placeholder="Number of Persons">
							</div>
						</div>
						<div class="col-md-12" style="margin-top: 20px;">
							<input type="submit" name="submit_book" value="Book Now" class="btn-book">
						</div>
						
					</div>
				</div>
			</div>
			<!-- our blog -->
			<div class="content-in content-ourblog">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2>Our Blog</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page. It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
						<div class="col-md-12">
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      	<img src="{{URL::asset('/uploads/1.jpg')}}" alt="...">
							      	<div class="caption">
							        	<h4>Blog Title Here</h4>
							        	<span>May 20th 2018 / By Admin/ 3 comments</span>
							        	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							        	<a href="https://www.google.com/" target="_blank" class="btn-readmore" role="button">Read More >></a>
							      	</div>
							    </div>
							</div>
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      	<img src="{{URL::asset('/uploads/2.jpg')}}" alt="...">
							      	<div class="caption">
							        	<h4>Blog Title Here</h4>
							        	<span>May 20th 2018 / By Admin/ 3 comments</span>
							        	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
							        	<a href="https://www.google.com/" target="_blank" class="btn-readmore" role="button">Read More >></a>
							      	</div>
							    </div>
							</div>
							<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							      	<img src="{{URL::asset('/uploads/3.jpg')}}" alt="...">
							      	<div class="caption">
							        	<h4>Blog Title Here</h4>
							        	<span>May 20th 2018 / By Admin/ 3 comments</span>
							        	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p> 
							        	<a href="https://www.google.com/" target="_blank" class="btn-readmore" role="button">Read More >></a>
							      	</div>
							    </div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="content-in content-newsletter">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-3">
							<h2>Newsletter</h2>
						</div>
						<div class="col-md-4">
							<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control" name="email" placeholder="Email">
							<input type="submit" name="submit" class="btn-send" value="Send">
						</div>
					</div>
				</div>
			</div>
			<div class="content-in content-contact">
				<div class="container">
					<div class="col-md-12">
						<div class="col-md-3">
							<h3>Contact us</h3>
							<div style="margin-top: 20px">
								<i class="material-icons">location_on</i><span>20 floor. On the other hand, we denounce with righteous indignation</span>
							</div>
							<div style="margin-top: 20px">
								<i class="fa fa-phone"></i><span>081 574 087 <br> +85581 574 087</span>
							</div>
							<div style="margin-top: 20px">
								<i class="fa fa-envelope"></i><span>sieknyhor@gmail.com</span>
							</div>
						</div>
						<div class="col-md-3">
							<h3>Informaion</h3>
							<div style="margin-top: 20px">
								<span>About Us</span>
							</div>
							<div style="margin-top: 10px">
								<span>Delivery Information</span>
							</div>
							<div style="margin-top: 10px">
								<span>contact Use</span>
							</div>
							<div style="margin-top: 10px">
								<span>Terms & Conditions</span>
							</div>
							<div style="margin-top: 10px">
								<span>Sitemap</span>
							</div>
						</div>
						<div class="col-md-3">
							<h3>Open Hours</h3>
							<div style="margin-top: 20px">
								<span>Monday-  Friday : 9 am to 12 am</span>
							</div>
							<div style="margin-top: 10px">
								<span>Saturday - Sunday : 24 Hours Open</span>
							</div>
							<div style="margin-top: 10px">
								<span>Breakfast : 7 am to 12 pm</span>
							</div>
							<div style="margin-top: 10px">
								<span>Lunch : 12 pm to 7 pm</span>
							</div>
							<div style="margin-top: 10px">
								<span>Dinner : 7 pm to 12 pm</span>
							</div>
						</div>
						<div class="col-md-3">
							<h3>Instagram</h3>
							<div style="margin-top: 10px">
								<div class="col-md-4">
									<a href="#" class="thumbnail">
										<img src="{{URL::asset('/uploads/1.jpg')}}" alt="1">	
									</a>
								</div>
								<div class="col-md-4">
									<a href="#" class="thumbnail">
										<img src="{{URL::asset('/uploads/2.jpg')}}" alt="2">	
									</a>
								</div>
								<div class="col-md-4">
									<a href="#" class="thumbnail">
										<img src="{{URL::asset('/uploads/3.jpg')}}" alt="3">	
									</a>
								</div>
								<div class="col-md-4">
									<a href="#" class="thumbnail">
										<img src="{{URL::asset('/uploads/3.jpg')}}" alt="3">	
									</a>
								</div>
								<div class="col-md-4">
									<a href="#" class="thumbnail">
										<img src="{{URL::asset('/uploads/2.jpg')}}" alt="2">	
									</a>
								</div>
								<div class="col-md-4">
									<a href="#" class="thumbnail">
										<img src="{{URL::asset('/uploads/1.jpg')}}" alt="1">	
									</a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer" class="footer">  <!-- navbar-fixed-bottom -->
			<div class="container footer_in">
				<div class="footer-left pull-left">
					<img src="{{URL::asset('/uploads/logo_white.png')}}" alt="logo">
				</div>
				<div class="footer-mid text-center">
					<p>Copyright&copy;Hor Siekny 2018. All Right Reserved.</p>
				</div>
				<div class="footer-right pull-right">
					<ul class="footer-right_in">
						<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest-p fa-lg"></i></a></li>
						<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
						<li><a href=""><i class="fa fa-youtube-play fa-lg"></i></a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>