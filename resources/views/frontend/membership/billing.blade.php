@extends('layouts.frontendmaster')
@section('frontend_content')
    @push('cs_css')
        <style>
            :root {
                /* colors */
                --ri5-color-primary-hsl: 242, 69%, 52%;
                --ri5-color-bg-hsl: 0, 0%, 100%;
                --ri5-color-contrast-high-hsl: 230, 7%, 23%;
                --ri5-color-contrast-higher-hsl: 230, 13%, 9%;
                --ri5-color-bg-darker-hsl: 240, 4%, 90%;
                --ri5-color-white-hsl: 0, 0%, 100%;

                /* typography */
                --ri5-text-sm: 0.833rem;

                --radio-switch-width: 120px;
                --radio-switch-height: 26px;
                --radio-switch-padding: 3px;
                --radio-switch-radius: 100vw;
                --radio-switch-animation-duration: 0.3s;
            }

            .radio-switch {
                position: relative;
                display: inline-flex;
                padding: var(--radio-switch-padding);
                border-radius: calc(var(--radio-switch-radius) * 1.4);
                background-color: hsl(var(--ri5-color-bg-darker-hsl));
            }

            .radio-switch:focus-within,
            .radio-switch:active {
                box-shadow: 0 0 0 2px hsla(var(--ri5-color-contrast-higher-hsl), 0.15);
            }

            .radio-switch__item {
                position: relative;
                display: inline-block;
                height: calc(var(--radio-switch-height) - 2*var(--radio-switch-padding));
                width: calc(var(--radio-switch-width)*0.5 - var(--radio-switch-padding));
            }

            .radio-switch__label {
                position: relative;
                z-index: 2;
                display: flex;
                height: 100%;
                align-items: center;
                justify-content: center;
                font-weight: 500;
                border-radius: var(--radio-switch-radius);
                cursor: pointer;
                font-size: var(--ri5-text-sm);
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                transition: all var(--radio-switch-animation-duration);
            }

            .radio-switch__input:checked~.radio-switch__label {
                color: hsl(var(--ri5-color-white-hsl));
            }

            .radio-switch__input:focus~.radio-switch__label {
                background-color: hsla(var(--ri5-color-primary-hsl), 0.6));
            }

            .radio-switch__label :not(*):focus-within,
            .radio-switch__input:focus~.radio-switch__label {
                background-color: transparent;
            }

            .radio-switch__marker {
                position: absolute;
                z-index: 1;
                top: 0;
                left: -100%;
                border-radius: var(--radio-switch-radius);
                background-color: hsl(var(--ri5-color-primary-hsl));
                height: calc(var(--radio-switch-height) - 2*var(--radio-switch-padding));
                width: calc(var(--radio-switch-width)*0.5 - var(--radio-switch-padding));
                box-shadow: 0 0.9px 1.5px rgba(0, 0, 0, 0.03), 0 3.1px 5.5px rgba(0, 0, 0, 0.08), 0 14px 25px rgba(0, 0, 0, 0.12);
                transition: -webkit-transform var(--radio-switch-animation-duration);
                transition: transform var(--radio-switch-animation-duration);
                transition: transform var(--radio-switch-animation-duration), -webkit-transform var(--radio-switch-animation-duration);
            }

            .radio-switch__input:checked~.radio-switch__marker {
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }

            /* utility classes */
            .ri5-sr-only {
                position: absolute;
                clip: rect(1px, 1px, 1px, 1px);
                clip-path: inset(50%);
                width: 1px;
                height: 1px;
                overflow: hidden;
                padding: 0;
                border: 0;
                white-space: nowrap;
            }
        </style>
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
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li>{{ $plane->plane_name }}</li>
                            <li>{{ 'Billing' }}</li>
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
                <form method="post" action="{{ route('billing.all') }}">
                    @csrf
                    <div class="row clearfix">

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <ul class="radio-switch ">
                                <li class="radio-switch__item">
                                    <input class="radio-switch__input ri5-sr-only" type="radio" name="plane_duration"
                                        id="radio-1" value="30" checked>
                                    <label class="radio-switch__label" for="radio-1">Monthly</label>
                                </li>

                                <li class="radio-switch__item">
                                    <input class="radio-switch__input ri5-sr-only" type="radio" name="plane_duration"
                                        id="radio-2" value="365">
                                    <label class="radio-switch__label" for="radio-2">Yearly</label>
                                    <div aria-hidden="true" class="radio-switch__marker"></div>
                                </li>
                            </ul>
                        </div>


                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Full Name" required="">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="plane_email" placeholder="Email Address" required="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="tel" name="plane_phone" placeholder="Phone Number(*Optional)">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="plane_website" placeholder="Your Website (*Optional)">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <select name="plane_type" id="" required="">
                                <option value="">Select Your Service*</option>
                                <option value="Website Maintenance">Website Maintenance</option>
                                <option value="Social Media Management">Social Media Management</option>
                            </select>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea class="" name="plane_details" placeholder="Write About Your Project"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <button class="theme-btn btn-style-one" type="submit"><span class="txt">Confirm <i
                                        class="fa fa-angle-right"></i></span></button>
                        </div>

                    </div>
                    @if ($errors->any())
                        {{ implode('', $errors->all('<span class="text-danger">:message</span>')) }}
                    @endif
                </form>

            </div>
            <!-- End billing Form -->

        </div>
        <!-- Form Box -->


        </div>
    </section>
@endsection
@push('cs_js')
    <script>
        /* ------------------------ Watermark (Please Ignore) ----------------------- */
        const createSVG = (width, height, className, childType, childAttributes) => {
            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");

            const child = document.createElementNS(
                "http://www.w3.org/2000/svg",
                childType
            );

            for (const attr in childAttributes) {
                child.setAttribute(attr, childAttributes[attr]);
            }

            svg.appendChild(child);

            return {
                svg,
                child
            };
        };

        document.querySelectorAll(".generate-button").forEach((button) => {
            const width = button.offsetWidth;
            const height = button.offsetHeight;

            const style = getComputedStyle(button);

            const strokeGroup = document.createElement("div");
            strokeGroup.classList.add("stroke");

            const {
                svg: stroke
            } = createSVG(width, height, "stroke-line", "rect", {
                x: "0",
                y: "0",
                width: "100%",
                height: "100%",
                rx: parseInt(style.borderRadius, 10),
                ry: parseInt(style.borderRadius, 10),
                pathLength: "30"
            });

            strokeGroup.appendChild(stroke);
            button.appendChild(strokeGroup);

            const stars = gsap.to(button, {
                repeat: -1,
                repeatDelay: 0.5,
                paused: true,
                keyframes: [{
                        "--generate-button-star-2-scale": ".5",
                        "--generate-button-star-2-opacity": ".25",
                        "--generate-button-star-3-scale": "1.25",
                        "--generate-button-star-3-opacity": "1",
                        duration: 0.3
                    },
                    {
                        "--generate-button-star-1-scale": "1.5",
                        "--generate-button-star-1-opacity": ".5",
                        "--generate-button-star-2-scale": ".5",
                        "--generate-button-star-3-scale": "1",
                        "--generate-button-star-3-opacity": ".5",
                        duration: 0.3
                    },
                    {
                        "--generate-button-star-1-scale": "1",
                        "--generate-button-star-1-opacity": ".25",
                        "--generate-button-star-2-scale": "1.15",
                        "--generate-button-star-2-opacity": "1",
                        duration: 0.3
                    },
                    {
                        "--generate-button-star-2-scale": "1",
                        duration: 0.35
                    }
                ]
            });

            button.addEventListener("pointerenter", () => {
                gsap.to(button, {
                    "--generate-button-dots-opacity": "1",
                    duration: 0.5,
                    onStart: () => {
                        setTimeout(() => stars.restart().play(), 500);
                    }
                });
            });

            button.addEventListener("pointerleave", () => {
                gsap.to(button, {
                    "--generate-button-dots-opacity": "0",
                    "--generate-button-star-1-opacity": ".25",
                    "--generate-button-star-1-scale": "1",
                    "--generate-button-star-2-opacity": "1",
                    "--generate-button-star-2-scale": "1",
                    "--generate-button-star-3-opacity": ".5",
                    "--generate-button-star-3-scale": "1",
                    duration: 0.15,
                    onComplete: () => {
                        stars.pause();
                    }
                });
            });
        });
    </script>
@endpush
