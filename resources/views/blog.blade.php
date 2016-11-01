<!DOCTYPE html>

<html>

	<head>

		<title> Blog | FluidTech Global </title>

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

		<div class = "blog-banner">  </div>

		<div class = "container">

			<div class = "row">

				<!-- About -->

				<div class = "col-md-12 plain">

					<h3> <span class = "plain-logo"> &lt; </span> The <span class = "plain-logo"> &frasl; </span> Blog <span class = "plain-logo"> &gt; </span> </h3>

					<div class = "row col-text blog-text">

						@foreach ($posts as $post)

							<div class = "col-md-12 blog-post">

								<div class = "col-sm-0 col-md-5">

									<img class = "img-responsive" src = "{{ $post->post_cover_image }}" alt = "">

								</div>

								<div class = "col-sm-12 col-md-7">

									<h4> {{ $post->post_title }} </h4>

									<p>

										{{ $post->post_summary }}

									</p>

									<p>

										<span class = "post-meta"> <i class = "fa fa-calendar">  </i> {{ $post->post_date }} by {{ $post->post_author }} </span>

									</p>

								</div>

							</div>

						@endforeach

					</div>

				</div>

				<!-- /About -->

			</div>

		</div>

	@extends("footer")