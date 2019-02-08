@extends('backend.index')
@section('title', 'Food Blog')
@section('content')

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />

<ul class="nav nav-tabs">
	<li><a href="{{ route('foodmenu_Add') }}">Add New</a></li>
	<li><a href="{{ route('adminfoodmenu') }}">Show Food Menu</a></li>
	<li class="active"><a href="">Edit Food Menu</a></li>
</ul>

<div>
		
	<form class="form-horizontal" action="{{ route('foodmenuupdate', $foodmenu->id) }}" method="POST" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<div class="form-group">
			  	<label class="col-md-4 control-label">IMAGE</label>
			  	<div class="col-md-5">
			    	<input id="image" class="form-control input-md" type="file" name="image" value="{{ $foodmenu->image }}" onchange="readURL(this);">
			    	
			  	</div>
			</div>
			@if ($foodmenu->image)
    			<img id="blah" src="{{URL::asset('/uploads/picture/')}}/{{ $foodmenu->image }}" class="img-responsive" alt="image" style="width: 150px; height: auto; position: absolute; left: 72%; top: 28%; box-shadow: 2px 1px 1px #d1d1d1">
    		@else
		        <img id="blah" src="{{URL::asset('/uploads/image.png')}}" class="img-responsive" alt="image" style="width: 150px; height: auto; position: absolute; left: 72%; top: 28%; box-shadow: 2px 1px 1px #d1d1d1">
		    @endif 
			
			<div class="form-group">
			  	<label class="col-md-4 control-label">FOOD NAME</label>
			  	<div class="col-md-5">
			    	
			    	<input placeholder="Food Name" name="foodName" class="form-control input-md" type="text" value="{{ $foodmenu->foodName }}">
			  	</div>
			</div>
			
			<!-- Text input-->
			<div class="form-group">
			  	<label class="col-md-4 control-label">PRICE</label>  
			  	<div class="col-md-5">
			  		
			  		<input name="price" placeholder="Price" class="form-control input-md" type="text" value="{{ $foodmenu->price }}">
			  	</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
	  			<label class="col-md-4 control-label">BLOG NAME</label>  
	  			<div class="col-md-5">
	  				
	  				<input id="addBy" name="addBy" placeholder="ADD BY" class="form-control input-md" type="text" value="{{ $foodmenu->addBy }}">
	    
	  			</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
	  			<label class="col-md-4 control-label">DESCRIPTION</label>  
	  			<div class="col-md-5">
	  				
	  				<textarea id="description" name="description" class="form-control input-md" placeholder="Description" rows="5" style="resize: none;">{{ $foodmenu->description }}</textarea>
	  				
	  			</div>
			</div>
			<!-- Button -->
			<div class="form-group">
	  			<label class="col-md-4 control-label"></label>
	  			<div class="col-md-4">
	    			<button id="btnSubmit" name="submit" type="submit" class="btn btn-primary">Submit</button>
	  			</div>
			</div>
	</form>
</div>

<script>
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