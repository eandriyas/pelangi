@extends('admin._layouts.admin')
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
					Categories
					</h1>
					<ol class="breadcrumb">
						<li>
							<i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
						</li>
						<li class="active">
							<i class="fa fa-filter"></i> Category
						</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				
				<div class="col-lg-5">
					<a href="{{ url('admin/category/create') }}" class="btn btn-default">Add</a>
					<a href="{{ url('admin/create') }}" class="btn btn-default">Publish</a>
					<a href="{{ url('admin/create') }}" class="btn btn-default">Unpublish</a>
					<a href="{{ url('admin/create') }}" class="btn btn-danger">Delete</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<h2>Kategori posting</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Kategori</th>
									<th>Jumlah Post</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; ?>
								@foreach($kategori as $kat)
								<tr>
									<td>{{$i}}</td>
									<td>{{$kat->kategori}}</td>
									<td>{{$a = $i+2}}</td>
									<td>
										<a href="" class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></a>
										<a class="fa fa-times" data-toggle="modal" data-placement="top" title="Delete" data-target=".modal-delete"></a>
										
									</td>
								</tr>
								<?php $i++ ?>
								@endforeach
							</tbody>
						</table>
						<div class="col-md-6 col-md-offset-5">{{ $kategori->links() }}</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
	<!-- /#page-wrapper -->
	<!-- /#page-wrapper -->
	<!-- /#page-wrapper -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('#side li').removeClass('active');
		$('#cat').addClass('active');
	});
	</script>
	@stop
