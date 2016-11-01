<!DOCTYPE html>

<html>

	<head>

		<title> FluidTech Global </title>

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

		<div class = "carousel slide homeCarousel" id = "homeCarousel" data-ride = "carousel">

			<div class = "carousel-inner" role = "listbox">

				<div class = "item active">
					
					<img src = "{{ URL::asset('img/carousel/1.jpg') }}" alt = "">

					<div class = "carousel-caption">
						<h2> <span class = "logo"> &lt; </span> FluidTech <span class = "logo"> &frasl; </span> Global <span class = "logo"> &gt; </span> </h2>
						<p>  </p>
					</div>

				</div>

				<div class = "item">
					
					<img src = "{{ URL::asset('img/carousel/2.jpg') }}" alt = "">
					<div class = "carousel-caption">
					</div>

				</div>

				<div class = "item">
					
					<img src = "{{ URL::asset('img/carousel/3.jpg') }}" alt = "">
					<div class = "carousel-caption">
					</div>

				</div>

				<div class = "item">
					
					<img src = "{{ URL::asset('img/carousel/4.jpeg') }}" alt = "">
					<div class = "carousel-caption">
					</div>

				</div>

				<div class = "item">
					
					<img src = "{{ URL::asset('img/carousel/5.jpeg') }}" alt = "">
					<div class = "carousel-caption">
					</div>

				</div>

			</div>

		</div>

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

				<!-- Portfolio -->

				<div class = "col-md-12 plain">

					<h3> <span class = "plain-logo"> &lt; </span> What We <span class = "plain-logo"> &frasl; </span> Have Done <span class = "plain-logo"> &gt; </span> </h3>

					<div class = "row col-text">

						<div class = "row object-non-visible" data-animation-effect = "fadeIn">

							<div class = "col-md-12">

								<!-- Isotope Filters -->

								<div class = "filters text-center">

									<ul class = "nav nav-pills">

										<li class = "active"> <a href = "#" data-filter = "*"> All </a> </li>
										<li> <a href = "#" data-filter = ".inhouse"> In-House </a> </li>
										<li> <a href = "#" data-filter = ".external"> External </a> </li>

									</ul>

								</div>

								<!-- /Isotope Filters -->

								<!-- Items -->

								<div class = "isotope-container row grid-space-20">

									<!-- 1 -->

									<div class = "col-sm-6 col-md-3 isotope-item inhouse">

										<div class = "image-box">

											<div class = "overlay-container">
												<img src = "{{ URL::asset('img/lykaah.png') }}" alt = "">
												<a class = "overlay" data-toggle="modal" data-target = "#project-1">
													<i class = "fa fa-search-plus">  </i>
													<span> Lykaah </span>
												</a>
											</div>

											<a class = "btn btn-default btn-block" data-toggle = "modal" data-target = "#project-1"> Lykaah </a>

										</div>

										<!-- Modal -->
										<div class = "modal fade" id = "project-1" tabindex = "-1" role = "dialog" aria-labelledby = "project-1-label" aria-hidden = "true">

											<div class = "modal-dialog modal-lg">

												<div class = "modal-content">

													<div class = "modal-header">
														<button type = "button" class = "close" data-dismiss = "modal"> <span aria-hidden = "true"> &times; </span> <span class = "sr-only"> Close </span> </button>
														<h4 class = "modal-title" id="project-1-label"> Lykaah </h4>
													</div>

													<div class = "modal-body">
														<div class = "row">
															<div class = "col-md-6">
															</div>
															<div class = "col-md-6">
																<img src = "{{ URL::asset('img/lykaah.png') }}" alt = "">
															</div>
														</div>
													</div>

													<div class = "modal-footer">
														<a href = "https://lykaah.com/" target = "_blank" class = "btn btn-sm btn-visit"> Visit </a>
													</div>

												</div>

											</div>

										</div>
										<!-- /Modal -->

									</div>

									<!-- /1 -->

									<!-- 2 -->

									<div class = "col-sm-6 col-md-3 isotope-item external">

										<div class = "image-box">

											<div class = "overlay-container">
												<img src = "{{ URL::asset('img/iren.png') }}" alt = "">
												<a class = "overlay" data-toggle="modal" data-target = "#project-2">
													<i class = "fa fa-search-plus">  </i>
													<span> IREN </span>
												</a>
											</div>

											<a class = "btn btn-default btn-block" data-toggle = "modal" data-target = "#project-2"> IREN </a>

										</div>

										<!-- Modal -->
										<div class = "modal fade" id = "project-2" tabindex = "-1" role = "dialog" aria-labelledby = "project-2-label" aria-hidden = "true">

											<div class = "modal-dialog modal-lg">

												<div class = "modal-content">

													<div class = "modal-header">
														<button type = "button" class = "close" data-dismiss = "modal"> <span aria-hidden = "true"> &times; </span> <span class = "sr-only"> Close </span> </button>
														<h4 class = "modal-title" id="project-2-label"> IREN </h4>
													</div>

													<div class = "modal-body">
														<div class = "row">
															<div class = "col-md-6">
															</div>
															<div class = "col-md-6">
																<img src = "{{ URL::asset('img/iren.png') }}" alt = "">
															</div>
														</div>
													</div>

													<div class = "modal-footer">
														<a href = "http://iren.fairtechglobal.com" target = "_blank" class = "btn btn-sm btn-visit"> Visit </a>
													</div>

												</div>

											</div>

										</div>
										<!-- /Modal -->

									</div>

									<!-- /2 -->

									<!-- 3 -->

									<div class = "col-sm-6 col-md-3 isotope-item inhouse">

										<div class = "image-box">

											<div class = "overlay-container">
												<img src = "{{ URL::asset('img/fluid.png') }}" alt = "">
												<a class = "overlay" data-toggle="modal" data-target = "#project-3">
													<i class = "fa fa-search-plus">  </i>
													<span> SULF </span>
												</a>
											</div>

											<a class = "btn btn-default btn-block" data-toggle = "modal" data-target = "#project-3"> SULF </a>

										</div>

										<!-- Modal -->
										<div class = "modal fade" id = "project-3" tabindex = "-1" role = "dialog" aria-labelledby = "project-3-label" aria-hidden = "true">

											<div class = "modal-dialog modal-lg">

												<div class = "modal-content">

													<div class = "modal-header">
														<button type = "button" class = "close" data-dismiss = "modal"> <span aria-hidden = "true"> &times; </span> <span class = "sr-only"> Close </span> </button>
														<h4 class = "modal-title" id="project-2-label"> SULF </h4>
													</div>

													<div class = "modal-body">
														<div class = "row">
															<div class = "col-md-6">
															</div>
															<div class = "col-md-6">
																<img src = "{{ URL::asset('img/fluid.png') }}" alt = "">
															</div>
														</div>
													</div>

													<div class = "modal-footer">
														<a href = "http://sulf.fairtechglobal.com" target = "_blank" class = "btn btn-sm btn-visit"> Visit </a>
													</div>

												</div>

											</div>

										</div>
										<!-- /Modal -->

									</div>

									<!-- /3 -->

									<!-- 4 -->

									<div class = "col-sm-6 col-md-3 isotope-item inhouse">

										<div class = "image-box">

											<div class = "overlay-container">
												<img src = "{{ URL::asset('img/hungerpixels.png') }}" alt = "">
												<a class = "overlay" data-toggle="modal" data-target = "#project-4">
													<i class = "fa fa-search-plus">  </i>
													<span> HungerPixels </span>
												</a>
											</div>

											<a class = "btn btn-default btn-block" data-toggle = "modal" data-target = "#project-4"> HungerPixels </a>

										</div>

										<!-- Modal -->
										<div class = "modal fade" id = "project-4" tabindex = "-1" role = "dialog" aria-labelledby = "project-4-label" aria-hidden = "true">

											<div class = "modal-dialog modal-lg">

												<div class = "modal-content">

													<div class = "modal-header">
														<button type = "button" class = "close" data-dismiss = "modal"> <span aria-hidden = "true"> &times; </span> <span class = "sr-only"> Close </span> </button>
														<h4 class = "modal-title" id="project-2-label"> HungerPixels </h4>
													</div>

													<div class = "modal-body">
														<div class = "row">
															<div class = "col-md-6">
															</div>
															<div class = "col-md-6">
																<img src = "{{ URL::asset('img/hungerpixels.png') }}" alt = "">
															</div>
														</div>
													</div>

													<div class = "modal-footer">
														<a href = "http://hungerpixels.fairtechglobal.com" target = "_blank" class = "btn btn-sm btn-visit"> Visit </a>
													</div>

												</div>

											</div>

										</div>
										<!-- /Modal -->

									</div>

									<!-- /4 -->

									<!-- 5 -->

									<div class = "col-sm-6 col-md-3 isotope-item inhouse">

										<div class = "image-box">

											<div class = "overlay-container">
												<img src = "{{ URL::asset('img/fluid.png') }}" alt = "">
												<a class = "overlay" data-toggle="modal" data-target = "#project-5">
													<i class = "fa fa-search-plus">  </i>
													<span> Dimba Sports </span>
												</a>
											</div>

											<a class = "btn btn-default btn-block" data-toggle = "modal" data-target = "#project-5"> Dimba Sports </a>

										</div>

										<!-- Modal -->
										<div class = "modal fade" id = "project-4" tabindex = "-1" role = "dialog" aria-labelledby = "project-5-label" aria-hidden = "true">

											<div class = "modal-dialog modal-lg">

												<div class = "modal-content">

													<div class = "modal-header">
														<button type = "button" class = "close" data-dismiss = "modal"> <span aria-hidden = "true"> &times; </span> <span class = "sr-only"> Close </span> </button>
														<h4 class = "modal-title" id="project-2-label"> Dimba Sports </h4>
													</div>

													<div class = "modal-body">
														<div class = "row">
															<div class = "col-md-6">
															</div>
															<div class = "col-md-6">
																<img src = "{{ URL::asset('img/fluid.png') }}" alt = "">
															</div>
														</div>
													</div>

													<div class = "modal-footer">
														<a href = "http://dimbasports.com" target = "_blank" class = "btn btn-sm btn-visit"> Visit </a>
													</div>

												</div>

											</div>

										</div>
										<!-- /Modal -->

									</div>

									<!-- /5 -->

								</div>

								<!-- /Items -->

							</div>

						</div>

					</div>

				</div>

				<!-- /Portfolio -->

				<!-- Blog -->

				<div class = "col-md-12 backlight">

					<h3> <span class = "backlight-logo"> &lt; </span> Recent <span class = "backlight-logo"> &frasl; </span> Posts <span class = "backlight-logo"> &gt; </span> </h3>

					<p>

						Recent posts from our blog. Pop in for a spell and read a little. We promise it will be more than just boring computer stuff.

					</p>

					<div class = "row col-text home-blog-text">

						

					</div>

					<p>

						<a href = "{{ URL('/blog') }}" class = "btn btn-small btn-blog"> See More Posts <i class = "fa fa-book">  </i> </a>

					</p>

				</div>

				<!-- /Blog -->

			</div>

		</div>

	@extends("footer")