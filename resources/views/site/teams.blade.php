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
                            <a class="active" href="#"> Team</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">Our Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <div class="rts-team-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title-style-center">
                        <h2 class="title">Meet Our Talented Team</h2>
                        <p class="disc">
                            we are proud to have a dedicated and skilled team of professionals <br>
                            who are passionate about interior renovation and design.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--50">
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

    <div class="rts-cta-main-wrapper rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-center cta-wrapper-two">
                        <div class="pre-title-area">
                            <img src="{{ asset('site/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Work With Us</span>
                        </div>
                        <h2 class="title"><span>We are</span> excited to learn <br>
                            more about <span>your project</span></h2>

                        <a href="{{ route('site.about-us') }}" class="rts-btn btn-border">Read More <i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('site.footer')

@endsection
