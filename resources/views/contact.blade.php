<!DOCTYPE html>

<html>

	<head>

		<title> Contact Us | FluidTech Global </title>

		<meta charset = "utf-8">
		<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
		<meta name = "viewport" content = "width = device-width, initial scale = 1">

		<link rel = "shortcut icon" href = "">
		<link type = "text/css" rel = "stylesheet" href = "{{ URL::asset('css/bootstrap.min.css') }}">
		<link type = "text/css" rel = "stylesheet" href = "{{ URL::asset('css/style.css') }}">
		<link type = "text/css" rel = "stylesheet" href = "{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}">
		<link type = "text/css" rel = "stylesheet" href = "{{ URL::asset('css/jquery.mCustomScrollbar.css') }}">

		<link href = "https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,400,600,700" rel = "stylesheet"> 

	</head>

	<body>

		<nav class = "navbar navbar-default">

			<div class = "container">

				<div class = "navbar-header">
					
					<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#navigate"> 
						
						<span class = "sr-only"> Menu </span>
						<span class = "icon-bar">  </span>
						<span class = "icon-bar">  </span>
						<span class = "icon-bar">  </span> 
						
					</button>
						
					<a class = "navbar-brand" href = "{{ URL('/') }}"> <span class = "header-logo"> &lt; </span> FluidTech <span class = "header-logo"> &frasl; </span> Global <span class = "header-logo"> &gt; </span> </a>
					
				</div>

				<div id = "navigate" class = "collapse navbar-collapse menu-items">

					<ul class = 'nav navbar-nav navbar-right'>

						<li>
							<a href = "{{ URL('/') }}"> Home </a>
						</li>
						<li>
							<a href = "{{ URL('/about') }}"> About Us </a>
						</li>
						<li>
							<a href = "{{ URL('/contact') }}"> Contact Us </a>
						</li>
						<li>
							<a href = "{{ URL('/blog') }}"> Blog </a>
						</li>

					</ul>

				</div>

			</div>

		</nav>

		<div class = "contact-banner">  </div>

		<div class = "container">

			<div class = "row">

				<!-- About -->

				<div class = "col-md-12 backlight">

					<h3> <span class = "plain-logo"> &lt; </span> Reach <span class = "plain-logo"> &frasl; </span> Us <span class = "plain-logo"> &gt; </span> </h3>

					<div class = "row col-text">

						<div class = "col-md-4 contact-info">

							<p>

								You could contact us physically

							</p>

							<address>
								
								<i class = "fa fa-phone">  </i> Phone: <br>
								<i class = "fa fa-envelope-o">  </i> Postal Address: <br>
								<i class = "fa fa-envelope">  </i> Email Address: <br>
								<i class = "fa fa-street-view">  </i> Physical Address:


							</address>

						</div>

						<div class = "col-md-2 alternate">

							<p>

								OR

							</p>

						</div>

						<div class = "col-md-6 contact-form">

							<p>

								You could drop us a message directly

							</p>

							<form>

								<div class = "col-md-12">

									<div class = "form-group">

										<label for = "name" class = "text-label"> Name: </label>
										<input class = "text-input form-control" type = "text" name = "name" placeholder = "Your name" required>

									</div>

								</div>

								<div class = "col-md-12">

									<div class = "form-group">

										<label for = "email" class = "text-label"> Email: </label>
										<input class = "text-input form-control" type = "email" name = "email" placeholder = "Your email address" required>

									</div>

								</div>

								<div class = "col-md-12">

									<div class = "form-group">

										<label for = "message" class = "text-label"> Message: </label>
										<textarea class = "text-input form-control" placeholder = "Your messsage" name = "message" rows = "5" required>  </textarea>

									</div>

								</div>

								<div class = "col-md-12">

									<button class = "btn btn-default" type = "submit"> Tell Us Your Thoughts </button>

								</div>

							</form>

						</div>

					</div>

				</div>

				<!-- /About -->

			</div>

		</div>

	@extends("footer")