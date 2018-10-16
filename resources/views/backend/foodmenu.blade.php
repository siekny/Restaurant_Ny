@extends('backend.index')
@section('title', 'Food Menu')
@section('content')
<div>
  	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Add New</a></li>
		<li><a data-toggle="tab" href="#menu1">Show Food Menu</a></li>
		<li><a data-toggle="tab" href="#menu2">About Food Menu</a></li>
	</ul>

	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
			<h3>HOME</h3>
			<p>Some content.</p>
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