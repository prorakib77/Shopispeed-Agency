@extends('layouts.frontendmaster')
@section('frontend_content')
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
						<h1>{{ 'Orders' }}</h1>
						<ul class="page-breadcrumb">
							<li><a href="{{ url('/') }}">home</a></li>
							<li>{{ 'Orders' }}</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
    </section>
    <!-- End Page Title -->
<section class="project-detail-section">
    <div class="auto-container">
            <div class="faq-form">
                <form method="post" action="{{ route('key_confirmation') }}">
                    @csrf
                    <div class="row clearfix text-center">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="plane_key" placeholder="Enter Your Order Key" required="">
                        </div>
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <button class="theme-btn btn-style-one" type="submit"><span class="txt">Confirm  <i class="fa fa-angle-right"></i></span></button>
                        </div>
                        
                    </div>
                </form>
                    
            </div>
            <!-- End billing Form -->
            
        </div>
        <!-- Form Box -->

        
    </div>
</section>
@endsection