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
			<form class="form-horizontal" id="formAdd" enctype="multipart/form-data">
				<fieldset>
					<div class="form-group">
					  	<label class="col-md-4 control-label">PICTURE</label>
					  	<div class="col-md-6">
					    	<input id="picture" placeholder="Blog Name" class="form-control input-md" required="" type="file" name="picture">
					  	</div>
					</div>
					<div class="form-group">
					  	<label class="col-md-4 control-label">BLOG NAME</label>
					  	<div class="col-md-6">
					    	<input id="blogName" placeholder="Blog Name" name="blogName" class="form-control input-md" required="" type="text">
					  	</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  	<label class="col-md-4 control-label">ADD DATE</label>  
					  	<div class="col-md-6">
					  		<input id="addDate" name="addDate" placeholder="ADD DATE" class="form-control input-md" required="" type="text" onfocus="(this.type='date')" onchange="(this.type='text')">
					  	</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
			  			<label class="col-md-4 control-label">ADD BY</label>  
			  			<div class="col-md-6">
			  				<input id="addBy" name="addBy" placeholder="ADD BY" class="form-control input-md" required="" type="text">
			    
			  			</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
			  			<label class="col-md-4 control-label">DESCRIPTION</label>  
			  			<div class="col-md-6">
			  				<textarea id="description" name="description" class="form-control input-md" placeholder="Description" required="" rows="5" style="resize: none;"></textarea>
			  				
			  			</div>
					</div>
					<!-- Button -->
					<div class="form-group">
			  			<label class="col-md-4 control-label"></label>
			  			<div class="col-md-4">
			    			<button id="btnSubmit" name="" class="btn btn-primary">Submit</button>
			  			</div>
					</div>
				</fieldset>
			</form>
		</div>
		<div id="menu1" class="tab-pane fade">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
		        <thead>
		            <tr>
		            	<th>No.</th>
		                <th>Blog Name</th>
		                <th>Add Date</th>
		                <th>Add By</th>
		                <th>Description</th>
		                <th style="width: 65px !important">Action</th>
		            </tr>
		        </thead>
		        <tbody id="foodBlog-info">
		        	<?php $i=1; ?>
		        	@foreach($foodblogs as $foodblog)
		        	
		            <tr id="{{ $foodblog->id }}">
		            	<td>{{ $i++ }}</td>
		                <td>{{ $foodblog->blogName }}</td>
		                <td>{{ date('d-M-Y', strtotime($foodblog->addDate)) }}</td>
		                <td>{{ $foodblog->addBy }}</td>
		                <td>{{ $foodblog->description }}</td>
		                <td>
		                	<a class="btn btn-success btn-sm edit" data-id="{{ $foodblog->id }}" title="{{ $foodblog->id }}"><span class="glyphicon glyphicon-edit"></span></a>
		                	<a class="btn btn-danger btn-sm delete" data-id="{{ $foodblog->id }}" title="{{ $foodblog->id }}"><span class="glyphicon glyphicon-trash"></span></a>
		                </td>
		            </tr>
		            @endforeach
		        </tbody>
	    	</table>
		</div>
			<div id="menu2" class="tab-pane fade">
			<h3>Menu 2</h3>
			<p>Some content in menu 2.</p>
		</div>
	</div>
</div>

<!-- pop up of deleting -->
<div class="modal fade" tabindex="-1" id="delete" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4>Deleting</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="center">
                	<input type="text" id="id_delete" class="form-control" name="">
                	<h3 style="margin: 0">Do you want to delete this Blog?</h3>
                </div>
                
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn btn-danger" id="btnDelete">Delete</button>
                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end pop up of deleting -->

<!-- pop up of editing -->
<div class="modal fade" tabindex="-1" id="edit" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4>Updating</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="center">
                	<input type="text" id="id_edit" class="form-control" name="">
                </div>
                <div class="form-group">
                	<label>Picture</label>
                	<input type="file" name="picture" id="picture" class="form-control">
                </div>
                <div class="form-group">
                	<label>BlogName</label>
                	<input type="text" name="blogName" id="blogName" class="form-control" placeholder="Blog Name">
                </div>
                <div class="form-group">
                	<label>Add Date</label>
                	<input type="text" name="blogName" id="blogName" class="form-control" placeholder="Blog Name">
                </div>
                <div class="form-group">
                	<label>Add By</label>
                	<input type="text" name="addBy" id="addBy" class="form-control" placeholder="Add By">
                </div>
                <div class="form-group">
                	<label>Description</label>
                	<textarea id="description" class="form-control" rows="5" placeholder="Description"></textarea>
                </div>
                
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn btn-danger" id="btnDelete">Delete</button>
                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end pop up of editing -->

<script type="text/javascript">
	$(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>



<!-- script to add new food blog -->

<script type="text/javascript">
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	$(document).ready(function () {
		// add script
		$('#btnSubmit').on('click', function(e) {
			e.preventDefault();
			var picture = $('#picture').val();
			var blogName = $('#blogName').val();
			var addDate = $('#addDate').val();
			var addBy = $('#addBy').val();
			var description = $('#description').val();
			console.log(picture)

			$.ajax({
				type: 'get',
				url: '{{route("foodblogAdd")}}',
				data: {
					picture : picture,
					blogName : blogName,
					addDate : addDate,
					addBy : addBy,
					description : description
				},
		        dataType:'JSON',
		        contentType: false,
		        cache: false,
		        processData: false,
				
				success: function(data) {
					console.log(data)
					swal({
			            text: "The data have been added",
			            icon: "success",
			            button: false,
			            timer: 3000
			          });
				
				},
				error: function(data){
		          	swal({
		            	text: "The data Can't added",
		            	icon: "error",
		            	button: "Close"
		          	});
		        }
			});
		});

		// delete script
		$('.delete').click(function(){
            $('#delete').modal('show');
            $('#id_delete').val($(this).attr('data-id'));
        });
        $('#btnDelete').click(function() {
        	var id = $('#id_delete').val();
        	$.ajax({
        		type: 'get',
        		url: '{{route("foodblogDelete")}}',
        		dataType: 'json',
        		data: {id : id},
        		success: function (data) {
        			$('#delete').modal('hide');
        			$('tr#'+id).remove();
        			
        			swal("", "Delete Successfully !", "success")
        		}
        	});
        	
        })

        // edit script
        $('.edit').click(function(){
            $('#edit').modal('show');
            $('#id_edit').val($(this).attr('data-id'));
        });
	});
</script>

<!-- end script to add new food blog -->
@stop