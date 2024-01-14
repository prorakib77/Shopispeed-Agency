
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shopispeed LLC</title>
<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/') }}/css/bootstrap.css" rel="stylesheet">

<!-- Revolution Slider -->
<link href="{{ asset('frontend/assets/') }}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('frontend/assets/') }}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('frontend/assets/') }}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

@stack('cs_css')
<link href="{{ asset('frontend/assets/') }}/css/style.css" rel="stylesheet">
<link href="{{ asset('frontend/assets/') }}/css/responsive.css" rel="stylesheet">

<link href="../css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('frontend/assets/') }}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ asset('frontend/assets/') }}/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
	<!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Header Style Four -->
    <header class="main-header header-style-four">
    	
		<!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
					<!-- Logo Box -->
					<div class="pull-left logo-box">
						<div class="logo"><a href="index.html"><img src="{{ asset('frontend/assets/') }}/images/logo-6.png" alt="" title=""></a></div>
					</div>
					
					<!-- Nav Outer -->
					<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<!-- Toggle Button -->
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current dropdown"><a href="#">Demos</a>
										<ul>
											<li><a href="index.html">Business Version</a></li>
											<li><a href="index-2.html">SEO Version</a></li>
											<li><a href="index-3.html">App Version</a></li>
											<li><a href="index-4.html">Shopify Version</a></li>
											<li><a href="index-5.html">Crypto Version</a></li>
											<li><a href="index-6.html">Finance Version</a></li>
											<li class="dropdown"><a href="#">Header Styles</a>
												<ul>
													<li><a href="index.html">Header Style One</a></li>
													<li><a href="index-2.html">Header Style Two</a></li>
													<li><a href="index-3.html">Header Style Three</a></li>
													<li><a href="index-4.html">Header Style Four</a></li>
													<li><a href="index-5.html">Header Style Five</a></li>
													<li><a href="index-6.html">Header Style Six</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">About</a>
										<ul>
											<li><a href="about.html">About us</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="faq.html">Faq's</a></li>
											<li><a href="price.html">Price</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Services</a>
										<ul>
											<li><a href="services.html">Services</a></li>
											<li><a href="service-detail.html">Services Detail</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Projects</a>
										<ul>
											<li><a href="projects.html">Projects Grid</a></li>
											<li><a href="projects-masonry.html">Projects Masonry</a></li>
											<li><a href="projects-detail.html">Projects Detail</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Our Blog</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
											<li><a href="not-found.html">Not Found</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							<!-- Search Btn -->
							<div class="search-box-btn transition-300ms"><span class="icon fa fa-search"></span></div>
						</nav>
						
						<!-- Main Menu End-->
						<div class="outer-box clearfix">
							
							<!-- Search Box -->
							<div class="search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Search" required="">
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
							<!-- End Search Box -->
							
							<!-- Language Dropdown -->
							<div class="language dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
									English &nbsp;<span class="fa fa-angle-down"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#">English</a></li>
									<li><a class="dropdown-item" href="#">France</a></li>
									<li><a class="dropdown-item" href="#">Arabic</a></li>
									<li><a class="dropdown-item" href="#">Urdu</a></li>
								</ul>
							</div>
							<!-- End Language Dropdown -->
							
							<!-- Button Box -->
							<div class="button-box">
								<a href="contact.html" class="theme-btn btn-style-eleven"><span class="txt">Get in Touch <i class="flaticon-next-3"></i></span></a>
							</div>
							<!-- End Button Box -->
							
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="{{ asset('frontend/assets/') }}/images/logo-5.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
				
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
					<!-- Main Menu End-->
					
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('frontend/assets/') }}/images/logo-small.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	

	

@yield('frontend_content')

	
	<!-- Footer Style Two -->
    <footer class="footer-style-two">
    	<div class="auto-container">
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="{{ asset('frontend/assets/') }}/images/logo-7.png" alt=""></a>
									</div>
									<div class="text">Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua susene</div>
									<!-- Social Box -->
									<ul class="social-box style-two">
										<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
										<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
										<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
										<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Services</h5>
									<ul class="nav-list">
										<li><a href="#">Web Design</a></li>
										<li><a href="#">SEO Optimizations</a></li>
										<li><a href="#">Web Development</a></li>
										<li><a href="#">Business Analysis</a></li>
										<li><a href="#">Market Research</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Quick Links</h5>
									<div class="row clearfix">
										<!-- Column -->
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<ul class="nav-list">
												<li><a href="#">Services</a></li>
												<li><a href="#">Help Center</a></li>
												<li><a href="#">Partners</a></li>
												<li><a href="#">Privacy Policy</a></li>
												<li><a href="#">Need a Career?</a></li>
											</ul>
										</div>
										<!-- Column -->
										<div class="column col-lg-6 col-md-6 col-sm-12">
											<ul class="nav-list">
												<li><a href="#">Latest News</a></li>
												<li><a href="#">Our Services</a></li>
												<li><a href="#">Expert Team</a></li>
												<li><a href="#">Clients Say</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget info-widget">
									<h5>Get In Touch</h5>
									<ul class="list-style-one style-two">
										<li><span class="icon flaticon-email"></span> support@gmail.com</li>
										<li><span class="icon flaticon-telephone"></span> Call : +012 (345) 678</li>
										<li><span class="icon flaticon-map"></span>55 Main Street, New York</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="copyright">&copy; {{ now()->year }} <a href="https://shopispeed.com">Shopispeed.</a> All rights reserved | Created By <a href="https://prorakib.com">Prorakib</a></div>
			</div>
			
		</div>
	</footer>
	<!-- End Footer Style Two -->
	
</div>
<!-- End PageWrapper -->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('frontend/assets/') }}/js/jquery.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/popper.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/bootstrap.min.js"></script>

<!-- Revolution Slider -->
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/plugins/revolution/js/main-slider-script.js"></script>
<!-- For Js Library -->

<script src="{{ asset('frontend/assets/') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/appear.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/parallax.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/tilt.jquery.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/jquery.paroller.min.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/owl.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/wow.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/validate.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/nav-tool.js"></script>
<script src="{{ asset('frontend/assets/') }}/js/jquery-ui.js"></script>
@stack('cs_js')
<script src="{{ asset('frontend/assets/') }}/js/script.js"></script>

</body>
</html>