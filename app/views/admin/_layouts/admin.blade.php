<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('head')
    
    <!-- Bootstrap Core CSS -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/sb-admin.css') }}
    {{ HTML::style('css/plugins/morris.css') }}
    {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}
    <!-- jQuery Version 1.11.0 -->
    {{ HTML::script('js/jquery-1.11.0.js') }}
</head>
<body>

@yield('content')
    <!-- /#wrapper -->
    
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/plugins/morris/raphael.min.js') }}
    {{ HTML::script('js/plugins/morris/morris.min.js') }}
    {{ HTML::script('js/plugins/morris/morris-data.js') }}
</body>
</html>