<!DOCTYPE html>

<html>

	<head>

		<title> About Us | FluidTech Global </title>

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

		<div class = "about-banner">  </div>

		<div class = "container">

			<div class = "row">

				<!-- About -->

				<div class = "col-md-12 plain">

					<h3> <span class = "plain-logo"> &lt; </span> About <span class = "plain-logo"> &frasl; </span> Us <span class = "plain-logo"> &gt; </span> </h3>

					<div class = "row col-text">

						<div class = "col-md-12">

							<p>

								<b> fluidtech global <sup> 1 </sup> </b> <em> n. </em>

							</p>

							<p>

								<b> fluidtech global <sup> 2 </sup> </b> <em> adj. </em> <b> 1. </b> (of a product of service) quality. <b> 2. </b> visionary; creative.

							</p>

						</div>

					</div>

				</div>

				<!-- /About -->

				<!-- Pillars -->

				<div class = "col-md-12 backlight">

					<h3> <span class = "backlight-logo"> &lt; </span> Our <span class = "backlight-logo"> &frasl; </span> Pillars <span class = "backlight-logo"> &gt; </span> </h3>

					<div class = "row col-text">

						<div class = "col-md-3 aspire">

							<i class = "fa fa-power-off fa-5x">  </i>

							<h4> Aspire </h4>

							<p>

								Everything begins with an idea or a goal. <br>
								An idea or goal focuses our mind as we set out to accomplish a task. As we take on your idea to help you translate it into what you have envisioned, we aspire to provide you the highest quality of service as you take the steps to showing your idea to the world.

							</p>

						</div>

						<div class = "col-md-3 innovate">

							<i class = "fa fa-lightbulb-o fa-5x">  </i>

							<h4> Innovate </h4>

							<p>

								Having determined what we want to do, we go about seeing the best ways to solve a problem or reach our goals. <br>
								The aim is not just to tackle a problem, but, rather, our aim is to do this in as creative and effieicent a way as possible, providing the world with something that has never been seen before.

							</p>

						</div>

						<div class = "col-md-3 create">

							<i class = "fa fa-magic fa-5x">  </i>

							<h4> Create </h4>

							<p>

								After finding a way to solve a problem, the next logical step is to translate our innovation into a working implementation of the idea by working with technology to produce an entirely new solution or one that extends on the functionality of existing solutions. <br>

							</p>

						</div>

						<div class = "col-md-3 inspire">

							<i class = "fa fa-users fa-5x">  </i>

							<h4> Inspire </h4>

							<p>

								It is our hope that through our innovations, we can inspire others to take such a step. <br>
								Our aim is to provide IT-based solutions to everyday problems faced by people in business, school and other areas of life. By taking these steps, we hope to inspire others to follow our lead and take similar steps.

							</p>

						</div>

					</div>

				</div>

				<!-- /Pillars -->

				<!-- Team -->

				<div class = "col-md-12 plain">

					<h3> <span class = "plain-logo"> &lt; </span> The <span class = "plain-logo"> &frasl; </span> Team <span class = "plain-logo"> &gt; </span> </h3>

					<p>

						They say [we're] in the class A team... <br>
						So go ahead, meet the A team.

					</p>

					<div class = "row col-text">

						@foreach ($team as $row)

							<div class = "col-md-3"> <!-- Team Member -->

								<div class = "team-profile">

									<img class = "img-responsive" src = "{{ $row->team_image }}" width = "435" height = "560" alt = "">

									<div class = "team-area">

										<div class = "team-details">
											<h2> {{ $row->team_first_name }} {{ $row->team_surname }} </h2> <!-- team member name -->
											<h3> {{ $row->team_designation }} </h3> <!-- team member designation -->
											<p> {{ $row->team_description }} </p> <!-- team member description -->

											<!-- <ul class = "team-social">
												<li> <a href = "#"> <i class = "fa fa-facebook">  </i> </a> </li>
											</ul> -->
										</div>

									</div>

								</div>

							</div> <!-- /Team Member -->

						@endforeach

					</div>

				</div>

				<!-- /Team -->

			</div>

		</div>

	@extends("footer")