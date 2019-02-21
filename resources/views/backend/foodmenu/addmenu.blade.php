@extends('backend.index')
@section('title', 'Food Menu')
@section('content')


@if(session()->has('msg'))
    <script>
        swal("Good job!", "Your data has been inserted Successfully!", "success")
    </script>
@endif 

<ul class="nav nav-tabs">
	<li class="active"><a href="">Add New</a></li>
	<li><a href="{{ route('adminfoodmenu') }}">Show Food Menu</a></li>
</ul>

<div>
			
	<form class="form-horizontal" action="/admin.foodmenu.add" method="POST" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<div class="form-group">
			  	<label class="col-md-4 control-label">IMAGE</label>
			  	<div class="col-md-5">
			    	<input id="picture" placeholder="Food Name" class="form-control input-md" type="file" name="image" onchange="readURL(this);">
			  	</div>
			</div>
			<div class="form-group">
			  	<label class="col-md-4 control-label">FOOD MENU NAME</label>
			  	<div class="col-md-5">
			    	
			    	<input placeholder="Food Name" name="foodName" class="form-control input-md" type="text">
			  	</div>
			</div>
			<img id="blah" src="{{URL::asset('/uploads/image.png')}}" class="img-responsive" alt="image" style="width: 150px; height: auto; position: absolute; left: 72%; top: 28%; box-shadow: 2px 1px 1px #d1d1d1">
			
			<!-- Text input-->
			<div class="form-group">
			  	<label class="col-md-4 control-label">PRICE</label>  
			  	<div class="col-md-5">
			  		
			  		<input name="price" placeholder="Price" class="form-control input-md" type="text">
			  	</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
	  			<label class="col-md-4 control-label">BLOG NAME</label>  
	  			<div class="col-md-5">
	  				
	  				<select name="blog_id" class="form-control imput-md" style="height: auto;">
	  					@foreach($foodblogids as $foodblogid)
	  						<option value="{{ $foodblogid->id }}">{{ $foodblogid->blogName }}</option>
	  					@endforeach
	  				</select>
	  			</div>
			</div>

			<!-- Text input-->
			<div class="form-group">
	  			<label class="col-md-4 control-label">DESCRIPTION</label>  
	  			<div class="col-md-5">
	  				
	  				<textarea id="description" name="description" class="form-control input-md" placeholder="Description" rows="5" style="resize: none;"></textarea>
	  				
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