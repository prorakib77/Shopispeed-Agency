@extends('layouts.frontendmaster')
@section('frontend_content')

@push('cs_css')
@endpush
	<!-- Page Title -->
    <section class="page-title style-two">
		<div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-18.png)"></div>
		<div class="cloud-layer" style="background-image: url(assets/images/background/pattern-19.png)"></div>
		<div class="big-letter">Planes</div>
    	<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1>{{ $plane->plane_name }}</h1>
						<ul class="page-breadcrumb">
							<li><a href="index.html">home</a></li>
							<li>{{ $plane->plane_name }}</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
    </section>
    <!-- End Page Title -->
	
	<!-- Project Detail Section -->
	<section class="project-detail-section">
		<div class="auto-container">
			<div class="main-image">
				<img src="assets/images/gallery/22.jpg" alt="">
			</div>
			<!-- Title Box -->
			<div class="title-box">
				<h2>Branding Design & Mobile Apps Development Solutions Projects</h2>
			</div>
			
			<!-- Project Info Box -->
			<div class="project-info-box">
				<ul>
					<li>
						<strong>Clients</strong>
						Somalia DE. Silva
					</li>
					<li>
						<strong>Category</strong>
						Design, Branding
					</li>
					<li>
						<strong>Location</strong>
						55 Main Address, USA
					</li>
					<li>
						<strong>Date</strong>
						07 March 2022
					</li>
				</ul>
			</div>
			
			<p class="text-center">{{ $plane->plane_description }}</p>
			
			<!-- Challenge Boxed -->
			<div class="challenge-boxed">
				<div class="box-inner">
					<h3>Projects Challenges</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui trum exercitationem ullam corporis suscipit labori</p>
				</div>
			</div>
			
			<!-- Gallery Box -->
			<div class="gallery-box">
				<div class="row clearfix">
					<div class="column col-lg-6 col-md-6 col-sm-12">
						<img src="assets/images/gallery/23.jpg" alt="">
					</div>
					<div class="column col-lg-6 col-md-6 col-sm-12">
						<img src="assets/images/gallery/24.jpg" alt="">
					</div>
				</div>
			</div>
			
			<!-- Goal Boxed -->
			<div class="goal-boxed">
				<div class="box-inner">
					<h3>Projects Goals</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui trum exercitationem ullam corporis suscipit labori</p>
					<div class="styled-text">veritatis et quasi architecto beatae vitae dicta sunt explicabo. spernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui trum exercitationem ullam</div>
				</div>
			</div>
			
			
			<!-- Form Box -->
			<div class="form-box">
<!-- Faq Form -->
				<div class="faq-form">
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<a href="{{ route('billing', $plane->id) }}" class="theme-btn btn-style-one"><span class="txt">Subscribe Now  <i class="fa fa-angle-right"></i></span></a>
							</div>
						</div>
						
				</div>
				<!-- End Faq Form -->
				
			</div>
			<!-- Form Box -->
			<div class="form-box">
				<h3>Leave a Comments</h3>
				
				<!-- Faq Form -->
				<div class="faq-form">
					<form method="post" action="contact.html">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="username" placeholder="Full Name" required="">
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="email" placeholder="Email Address" required="">
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="" name="message" placeholder="Write Comments"></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Leave Comments Now  <i class="fa fa-angle-right"></i></span></button>
							</div>
							
						</div>
					</form>
						
				</div>
				<!-- End Faq Form -->
				
			</div>
			
		</div>
	</section>
	<!-- End Project Detail Section -->


@endsection
@push('cs_js')

@endpush