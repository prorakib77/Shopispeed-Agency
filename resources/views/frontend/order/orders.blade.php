@extends('layouts.frontendmaster')
@section('frontend_content')
    <!-- Page Title -->
    <section class="page-title style-two">
        <div class="pattern-layer-one" style="background-image: url(assets/images/background/pattern-18.png)"></div>
        <div class="cloud-layer" style="background-image: url(assets/images/background/pattern-19.png)"></div>
        <div class="big-letter">
            @if ($billing->plane_duration == 30)
                <h3>1 Month Subscription</h3>
            @elseif ($billing->plane_duration == 365)
                <h3>1 Year Subscription</h3>
            @endif
        </div>
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
    <section class="skill-section" style="background-image: url(assets/images/background/pattern-23.png)">
        <div class="auto-container">
            <div class="row clearfix">


                <!-- Images Column -->
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column parallax-scene-1">
                        <h1>{{ $billing->username }}</h1>
                    </div>
                </div>
                <div class="images-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column parallax-scene-1">
                        {{-- <h3>{{ $billing->plane_duration }}</h3> --}}

                        @if ($billing->plane_duration == 30)
                            <h3>1 Month Subscription</h3>
                        @elseif ($billing->plane_duration == 365)
                            <h3>1 Year Subscription</h3>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
