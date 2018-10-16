@extends('backend.index')
@section('title', 'Food Blog')
@section('content')
<div>
  	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Add New</a></li>
		<li><a data-toggle="tab" href="#menu1">Show Food Blog</a></li>
		<li><a data-toggle="tab" href="#menu2">About Food Blog</a></li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<form class="form-horizontal">
				<fieldset>
					<!-- Select Basic -->
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="category_name">CATEGORY NAME</label>
					  	<div class="col-md-4">
					    	<select id="category_name" name="category_name" class="form-control">
					    	</select>
					  	</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="category_name_fr">CATEGORY NAME FR</label>
					  	<div class="col-md-4">
					    	<select id="category_name_fr" name="category_name_fr" class="form-control">
					    	</select>
					  	</div>
					</div>
				

					<!-- Text input-->
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="add_date">ADD DATE</label>  
					  	<div class="col-md-4">
					  		<input id="add_date" name="add_date" placeholder="ADD DATE" class="form-control input-md" required="" type="text">
					  	</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
			  			<label class="col-md-4 control-label" for="add_by">ADD BY</label>  
			  			<div class="col-md-4">
			  				<input id="add_by" name="add_by" placeholder="ADD BY" class="form-control input-md" required="" type="text">
			    
			  			</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
			  			<label class="col-md-4 control-label" for="modification_date">MODIFICATION DATE</label>  
			  			<div class="col-md-4">
			  				<input id="modification_date" name="modification_date" placeholder="MODIFICATION DATE" class="form-control input-md" required="" type="text">
			    
			  			</div>
					</div>
					<!-- Button -->
					<div class="form-group">
			  			<label class="col-md-4 control-label" for=""></label>
			  			<div class="col-md-4">
			    			<button id="" name="" class="btn btn-primary">Submit</button>
			  			</div>
					</div>
				</fieldset>
			</form>
		</div>
		<div id="menu1" class="tab-pane fade">
			<h3>Menu 1</h3>
			<p>Some content in menu 1.</p>
		</div>
			<div id="menu2" class="tab-pane fade">
			<h3>Menu 2</h3>
			<p>Some content in menu 2.</p>
		</div>
	</div>
</div>
@stop