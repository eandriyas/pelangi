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
                    Login <small>Yakinkan dirimu, anda sudah login</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Login
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @if ($alert = Session::get('alert-error'))
                        <div class="alert alert-warning">{{ $alert }}</div>
                    @endif
                    {{Form::open(array('route'=>'admin.login.post'))}}
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', null, array('class'=>'form-control')) }}
                        {{ $errors->first('email', '<p class="text-warning">:message</p>') }}
                        
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::password('password', array('class'=>'form-control')) }}
                        {{ $errors->first('password', '<p class="text-warning">:message</p>') }}
                        
                    </div>
                    <div class="form-group">
                        <label>Remember Password</label>
                        <label class="checkbox-inline">
                            <input type="checkbox">
                        </div>
                        <button type="submit" class="btn btn-default">Login</button>
                        {{Form::close()}}
                    </div>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    @stop