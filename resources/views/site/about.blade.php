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
                            <a class="active" href="#">About</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <!-- about  page top histoory information  -->
    <div class="about-top-history-information rts-section-gap">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4">
                    <div class="title-style-left">
                        <div class="pre-title-area">
                            <img src="{{ asset('site/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Our Story</span>
                        </div>
                        <h2 class="title">Our Story</h2>
                    </div>
                    <div class="about-left-history pl--50 pt--30">
                        <img src="{{ asset('site/assets/images/about/12.png') }}" alt="about">
                    </div>
                    <div class="history-image-left mt--55 rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{ asset('upload/aboutUs/'. $about->image_one) }}"
                             alt="about">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 mt_sm--50">
                    <div class="history-right-area-inner">
                        <p class="disc rts-slide-up">
                            {!! $about->our_story !!}
                        </p>
                        <div class="history-right-img mt--80 rts-reveal-one">
                            <img class="rts-reveal-image-one" src="{{ asset('upload/aboutUs/'. $about->image_two) }}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about  page top histoory information end -->

    <!-- our-team start -->
    <div class="rts-team-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title-style-center">
                        <div class="pre-title-area">
                            <img src="{{ asset('site/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Our Team</span>
                        </div>
                        <h2 class="title">Meet Our Talented Team</h2>
                        <p class="disc">
                            we are proud to have a dedicated and skilled team of professionals <br>
                            who are passionate about interior renovation and design.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--50 rts-slide-up">
                @foreach($teams as $team)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- team area start -->
                        <div class="team-area-start-one">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('upload/teams/'. $team->image) }}" alt="team_area">
                            </a>
                            <div class="team-content">
                                <div class="name-area">
                                    <h6 class="name">{{ $team->name }}</h6>
                                    <span class="desi">{{ $team->position }}</span>
                                </div>

                                <div class="social-team-one">
                                    <ul>
                                        <li>
                                            <a href="{{ $team->facebook }}">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ $team->twitter }}">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li><a href="{{ $team->youtube }}">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ $team->linkedin }}">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- team area end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- our-team end -->

    <!-- contact area start -->
    <div class="rts-contact-area rts-section-gap p-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contct-thumbnail-left rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{ asset('site/assets/images/contact/01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pl--60 pr--100 pr_md--10 pr_sm--10 pl_sm--10 pl_md--10 pt_md--50 pt_sm--50 bg-light p-5">
                    <div class="easy-appoinment-area">
                        <div class="title-left-style-seven-wrapper">
                            <span class="pre">Feature Services</span>
                            <h2 class="title">have any questions</h2>
                        </div>
                        <form action="#" id="contactForm">
                            <input type="hidden" id="csrf_token" name="csrf_token" value="{{ csrf_token() }}">
                            <input type="text" id="name" name="name" placeholder="Your Name">
                            <input type="email" id="email" name="email" placeholder="Your Email">
                            <textarea id="message" name="message" placeholder="Your Message"></textarea>
                            <button type="submit" id="submitContact" class="rts-btn btn-primary">Send Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area start -->

    @include('site.footer')

@endsection
