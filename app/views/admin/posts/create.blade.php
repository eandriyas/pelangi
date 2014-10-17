@extends('admin._layouts.admin')
@section('head')
<title>Admin| Create</title>
<!-- {{ HTML::style('admin/lib/css/bootstrap.min.css') }} -->
{{ HTML::style('admin/lib/css/prettify.css') }}
{{ HTML::style('admin/src/bootstrap-wysihtml5.css') }}
@stop
@section('content')
<div id="wrapper">
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<!-- top navigation -->
		@include('admin.posts.partials.top')
		@include('admin.posts.partials.sidebar')
	</nav>
	<div id="page-wrapper">
		<div class="container-fluid">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					Edit Artikel
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="{{ url('admin/index') }}">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-book"></i> <a href="{{ url('admin/posts') }}">Posts</a>
						</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->
			
			
			<div class="row">
				<div class="col-lg-8">
					{{ Form::open(array('route' => array('admin.posts.store', 'method'=>'post'))) }}
					@include('admin.posts.partials.form')
					{{ Form::close() }}
				</div>
			</div>
			
		
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<script type="text/javascript">
$(document).ready(function(){
	$('#side li').removeClass('active');
	$('#posts').addClass('active');
});
</script>
{{ HTML::script('admin/lib/js/wysihtml5-0.3.0.js') }}
<!-- {{ HTML::script('admin/lib/js/jquery-1.7.2.min.js') }} -->
{{ HTML::script('admin/lib/js/prettify.js') }}
<!-- {{ HTML::script('admin/lib/js/bootstrap.min.js') }} -->
{{ HTML::script('admin/src/bootstrap-wysihtml5.js') }}

<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>
@stop