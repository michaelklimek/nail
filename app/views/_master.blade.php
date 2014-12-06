<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<meta charset='UTF-8'>
	@section('head')
	@show
	<title>
		@yield('title')
	</title>
</head>
<body>
	<div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('MastersController@master') }}" class="navbar-brand">NAIL SALON</a>
                <a href="{{ action('AboutsController@about') }}" class="navbar-brand">About Us</a>
				<a href="#" class="navbar-brand">Gallery</a>
				<a href="#" class="navbar-brand">Guestbook</a>
				<a href="#" class="navbar-brand">Schedule Appointment</a>
				<a href="{{ action('ContactsController@contact') }}" class="navbar-brand">Contact Us</a>
            </div>
        </nav>
    </div>
	<div class="content">
		@yield('body')
	</div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>