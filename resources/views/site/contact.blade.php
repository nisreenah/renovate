@extends('site.master')

@section('content')

    <!-- header three area start -->
    <!-- bread croumba rea start -->
    <div class="breadcrumb-area-bg bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bread-crumb-area-inner">
                        <div class="breadcrumb-top">
                            <a href="#">Home</a> /
                            <a class="active" href="#">Contact Us</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <div class="contact-info-area-start rts-section-gapTop">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-4 p-5 bg-light">
                    <div class="contact-info-mid">
                        <p class="top-contact mb--20">Contact Details</p>
                        <div class="single-information mt--30">
                            <span>Address:</span>
                            <p class="address">
                                {{ \App\Helpers\SiteHelper::aboutUs()->address }}
                            </p>
                        </div>
                        <div class="single-information">
                            <span>Phone:</span>
                            <a href="Tel:{{ \App\Helpers\SiteHelper::aboutUs()->phone }}">
                                {{ \App\Helpers\SiteHelper::aboutUs()->phone }}
                            </a>
                        </div>
                        <div class="single-information">
                            <span>Mail:</span>
                            <a href="mailto:{{ \App\Helpers\SiteHelper::aboutUs()->email }}">
                                {{ \App\Helpers\SiteHelper::aboutUs()->email }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto"></div>
                <div class="col col-lg-4 p-5 bg-light">
                    <form action="#" class="contact-form-conatct-page" id="contactForm">
                        <p class="top-contact mb--20">Contact Us</p>
                        <input type="hidden" id="csrf_token" name="csrf_token" value="{{ csrf_token() }}">
                        <input type="text" id="name" name="name" placeholder="Your name" required>
                        <input type="email" id="email" name="email" placeholder="Your Email">
                        <textarea name="message" id="message" placeholder="Your message"></textarea>
                        <button type="submit" id="submitContact" class="rts-btn btn-primary mt--30">Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(!empty(\App\Helpers\SiteHelper::aboutUs()->lat) and !empty(\App\Helpers\SiteHelper::aboutUs()->long))
        <div class="container mt--120">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://maps.google.com/maps?q='+{{ \App\Helpers\SiteHelper::aboutUs()->lat }}+','+{{ \App\Helpers\SiteHelper::aboutUs()->long }}+'&hl=es&z=14&amp;output=embed"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
{{--                <div class="col-lg-12">--}}
{{--                    <small>--}}
{{--                        <a href="https://maps.google.com/maps?q='+{{ \App\Helpers\SiteHelper::aboutUs()->lat }}+','+{{ \App\Helpers\SiteHelper::aboutUs()->long }}+'&hl=es;z=14&amp;output=embed"--}}
{{--                            style="color:#0000FF;text-align:left"--}}
{{--                            target="_blank">See map bigger--}}
{{--                        </a>--}}
{{--                    </small>--}}
{{--                </div>--}}
            </div>
        </div>
    @endif

    @include('site.footer')

@endsection
