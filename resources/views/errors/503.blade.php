@extends('layouts.frontendmaster')
@section('frontend_content')
	<!-- Page Title / Style Three -->
    <section class="page-title style-three">
		<div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-18.png)"></div>
		<div class="cloud-layer" style="background-image: url(assets/images/background/pattern-19.png)"></div>
		<div class="big-letter">404</div>
    	<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1>Not Found</h1>
						<ul class="page-breadcrumb">
							<li><a href="{{ url('/') }}">home</a></li>
							<li>404</li>
						</ul>
					</div>
				</div>
				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="assets/images/resource/page-title-4.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- End Page Title / Style Three -->
	
	<!--Error Section-->
    <section class="error-section">
    	<div class="auto-container">
        	<div class="content">
            	<h1>404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
				<a href="{{ url('/') }}" class="theme-btn btn-style-four"><span class="txt">Go to Home Page</span></a>
            </div>
        </div>
    </section>
    <!--End Error Section-->
@endsection