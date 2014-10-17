@extends('admin._layouts.admin')
@section('head')
<title>Admin| Posts</title>
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
					Posts
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="{{ url('admin/index') }}">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-book"></i> Posts
						</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-5">
					<a href="{{ url('admin/create') }}" class="btn btn-default">Add</a>
					<a href="{{ url('admin/create') }}" class="btn btn-default">Publish</a>
					<a href="{{ url('admin/create') }}" class="btn btn-default">Unpublish</a>
					<a href="{{ url('admin/create') }}" class="btn btn-danger">Delete</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h2>Semua artikel</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<script language="JavaScript">
							function toggle(source) {
							checkboxes = document.getElementsByName('foo');
							for(var i=0, n=checkboxes.length;i<n;i++) {
							checkboxes[i].checked = source.checked;
							}
							}
							</script>
							<thead>
								<tr>
									<th><input type="checkbox" name="foo" onclick="toggle(this)" value="option1"></th>
									<th>No</th>
									<th>Title</th>
									<th>Status</th>
									<th>Text</th>
									<th>User</th>
									<th>Updated at</th>
									<th>Action</th>
								</tr>
							</thead>
							<style>
											.modal-dialog-center{
												margin-top: 20%;
												width: 30%;
											}
							</style>
							<tbody>
								<?php $i=1;?>
								@foreach ($posts as $post)
								<tr>
									<td><input type="checkbox" name="foo" value="{{ $post->id }}"></td>
									<td>{{ $i }}</td>
									<td>{{ $post->title }}</td>
									<td>Publish</td>
									<td>{{ str_limit($post->body, $limit = 30, $end = '...') }}</td>
									<td>{{ $post->user->email }}</td>
									<td>{{ $post->updated_at }}</td>
									<td>
										<a href="{{ url('admin/edit', $post->id) }}" class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<a class="fa fa-times" data-toggle="modal" data-placement="top" title="Delete" data-target=".modal-delete{{ $post->id }}"></a>
									</td>
								</tr>
								<div class="modal modal-delete{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-center modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h2 class="modal-title text-center" id="myModalLabel">Are you sure to delete this article?</h2>
											</div>
											
											<div class="modal-footer">
												{{ Form::open(array('route' => array('admin.posts.destroy', $post->id), 'method'=>'delete')) }}
												
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-danger">Delete</button>
												{{ Form::close() }}
											</div>
										</div>
									</div>
								</div>
								
								
								<?php $i++; ?>
								@endforeach
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-5">{{ $posts->links() }}</div>
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
	@stop