@extends('backend.index')
@section('title', 'Food Menu')
@section('content')

@if(session()->has('msg'))
    <script>
        swal("Good job!", "Your data has been Removed Successfully!", "success")
    </script>
@endif 

<ul class="nav nav-tabs">
	<li><a href="{{ route('foodmenu_Add') }}">Add New</a></li>
	<li class="active"><a href="{{ route('adminfoodmenu') }}">Show Food Menu</a></li>
</ul>
		
	<div>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
	        <thead>
	            <tr>
	            	<th>No.</th>
	                <th>Food Name</th>
	                <th>Price</th>
	                <th>Blog Name</th>
	                <th>Description</th>
	                <th style="width: 90px !important">Action</th>
	            </tr>
	        </thead>
	        <tbody id="foodBlog-info">
	        	<?php $i=1; ?>
	        	@foreach($foodmenus as $foodmenu)
	        	
	            <tr id="{{ $foodmenu->id }}" class="trID" data-id="{{ $foodmenu->id }}">
	            	<td>{{ $i++ }}</td>
	                <td>{{ $foodmenu->foodName }}</td>
	                <td>{{ $foodmenu->price }}</td>
	                <td>{{ $foodmenu->blog_id }}</td>
	                <td>{{ $foodmenu->description }}</td>
	                <td>
	                	<button type="button" class="btn btn-warning btn-sm view" data-toggle="modal" data-target="#view{{ $foodmenu->id }}" title="{{ $foodmenu->foodName }}"><span class="glyphicon glyphicon-eye-open"></span></button>
	                	
	                	<a href="{{ route('foodmenuedit', $foodmenu->id) }}" class="btn btn-success btn-sm edit" data-id="{{ $foodmenu->id }}" title="{{ $foodmenu->foodName }}"><span class="glyphicon glyphicon-edit"></span></a>
	                	
	                	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $foodmenu->id }}" title="{{ $foodmenu->foodName }}"><span class="glyphicon glyphicon-trash"></span></button>

	                </td>

	                <!-- Modal -->
				  	<div class="modal fade" id="view{{ $foodmenu->id }}" role="dialog">
					    <div class="modal-dialog">
					    
					      	<!-- Modal content-->
					      	<div class="modal-content">
					      		{{ csrf_field() }}
						        <div class="modal-header">
						          	<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title">Modal Header</h4>
						        </div>
						        <div class="modal-body">
						        	<div style="margin: 0 auto">
						        		@if ($foodmenu->image)
						        			<img src="{{URL::asset('/uploads/picture/')}}/{{ $foodmenu->image }}" class="img-responsive" alt="image" style="margin: 0 auto; width: 50%; margin-bottom: 20px">
						        		@else
									        <img src="{{URL::asset('/uploads/image.png')}}" class="img-responsive" alt="image" style="margin: 0 auto; width: 50%; margin-bottom: 20px">
									    @endif 
						        	</div>
						          	<div class="col-md-4 col-md-offset-1">
						          		<p>Name of Food </p>
						          		<p>Price pf Food </p>
						          		<p>In Blog</p>
						          		<p>Description </p>
						          	</div>
						          	<div class="col-md-1" style="font-weight: bold;">
						          		<p> : </p>
						          		<p> : </p>
						          		<p> : </p>
						          		<p> : </p>
						          	</div>
						          	<div class="col-md-5">
						          		<p>{{ $foodmenu->foodName }}</p>
						          		<p>{{ $foodmenu->price }}</p>
						          		<p>{{ $foodmenu->blog_id }}</p>
						          		<p>{{ $foodmenu->description }}</p>
						          	</div>
						        </div>
						        <div class="modal-footer">
						          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
					      	</div>
					      
					    </div>
				  	</div>


				  	<!-- Modal Delete -->
				  	<div class="modal fade" id="delete{{ $foodmenu->id }}" role="dialog">
					    <div class="modal-dialog">
					    
					      	<!-- Modal content-->
					      	<form action="{{ route('foodblogdelete', $foodmenu->id) }}" method="POST">
						      	<div class="modal-content">
						      		{{ csrf_field() }}
							        <div class="modal-header">
							          	<button type="button" class="close" data-dismiss="modal">&times;</button>
							          		<h4 class="modal-title">Delete Food Blog</h4>
							        </div>
							        <div class="modal-body">
							          	<h3>Do you want to delete this food blog?</h3>
							        </div>
							        <div class="modal-footer">
							          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							          	<button type="submit" name="submit" class="btn btn-danger">Delete</button>
							        </div>
						      	</div>
					      	</form>
					      
					    </div>
				  	</div>

	            </tr>
	            @endforeach
	        </tbody>
    	</table>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

	<style type="text/css">
		.form-inline { display: block !important; }
		div.dataTables_wrapper div.dataTables_length label { float: left !important; }
		select.form-control:not([size]):not([multiple]) {
			margin-right: 10px !important;
			margin-left: 10px !important;
		}
		div.dataTables_wrapper div.dataTables_filter label { float: right !important; }
		.modal-title { position: absolute; }
		.swal-text { font-size: 22px !important }
	</style>

	<script>
		$(document).ready(function() {

            $('#example').DataTable( {

            "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]

            } );

        } );


		function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	                $('#blah')
	                    .attr('src', e.target.result)
	                    .width(150)
	                    .height(auto);
	            };

	            reader.readAsDataURL(input.files[0]);
	        }
	    }

	</script>


@stop