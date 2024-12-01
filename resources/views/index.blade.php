<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>YOI Pizza</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="{{route ('index')}}">Inicio</a></li>
						<li class="main_nav_item"><a href="{{route ('menu')}}">Menu</a></li>
						<li class="main_nav_item"><a href="{{route ('contact')}}">contactanos</a></li>
						<li class="main_nav_item"><a href="{{route ('elements')}}">elements</a></li>
						<li class="main_nav_item"><a href="{{route ('news')}}">noticias</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+43 4566 7788 2457</span>
		</div>
		
	</header>

	<!-- Home -->
	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
			
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">INSERTAR TEXTO PARA</h1>
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">MENU CENTRAL AQUI</h1>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/pizza_icon.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Pizzas</h2>
								<a href="courses.html" class="hero_box_link">Ver mas</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/hamburguesa.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Hamburguesas</h2>
								<a href="courses.html" class="hero_box_link">Ver mas</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/pasta.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Pastas</h2>
								<a href="teachers.html" class="hero_box_link">Ver mas</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Lo mas popular</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_1.jpg">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Mega Hamburguesa Americana</div>
							<div class="card-text">.</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/hamburguesa_icon.jpg">
							</div>
							<div class="course_author_name">Precio</div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$125</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_2.jpg">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Pasta Gambetti</div>
							<div class="card-text">.</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/pasta_icon.jpg">
							</div>
							<div class="course_author_name">Precio</div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$169</span></div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_3.jpg">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Pizza Mazatleca</a></div>
							<div class="card-text">Cuadripizza</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<img src="images/p	izza_icon.jpg">
							</div>
							<div class="course_author_name">Precio</div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><span>$409</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">

			</div>
		</div>
	</div>


	<!-- Testimonials -->
	<div class="testimonials page_section">
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/testimonials_background.jpg)"></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Opiniones Populares</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">		
					<div class="testimonials_slider_container">
<!--               --------------------------------------------------------       -->
						<div id="testimonials" class="container-fluid wow text-light has-height-lg middle-items">
							<div class="row mt-3 mb-5">

								<div class="col-md-4 my-3 my-md-0">
									<div class="row event_item">
										<h2 class="testmonial-title">John Doe</h2>
										<div class="testimonials_text">
											<p>Todo excelente, las ensaladas muy bastas y las pizzas super ricas.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 my-3 my-md-0">
									<div class="row event_item">
										<h2 class="testmonial-title">John Doe</h2>
										<div class="testimonials_text">
											<p>Todo excelente, las ensaladas muy bastas y las pizzas super ricas.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 my-3 my-md-0">
									<div class="row event_item">
										<h2 class="testmonial-title">John Doe</h2>
										<div class="testimonials_text">
											<p>Todo excelente, las ensaladas muy bastas y las pizzas super ricas.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 my-3 my-md-0">
									<div class="row event_item">
										<h2 class="testmonial-title">John Doe</h2>
										<div class="testimonials_text">
											<p>Todo excelente, las ensaladas muy bastas y las pizzas super ricas.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
<!--               --------------------------------------------------------       -->
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity campus</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>	
					</div>
				</div>

				<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div>

			</div>
				
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">

		<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
			<div class="footer_copyright">
				<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>





