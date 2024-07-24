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
                            <a class="active" href="#">Services</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">All Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <!-- service area start -->
    <div class="rts-service-inner-area rts-section-gap service-v-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-center">
                        <div class="pre-title-area">
                            <img src="{{ asset('site/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Our Service</span>
                        </div>
                        <h2 class="title">Our Services</h2>
                        <p class="disc">
                            we are proud to have a dedicated and skilled team of professionals <br>
                            who are passionate about interior renovation and design.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 rts-slide-up ">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- ingle srevice area start -->
                        <div class="singe-serice-style-two">
                            <a href="{{ route('site.service-details', $service->slug) }}" class="thumbnail">
                                <img style="height: 400px !important" src="{{ asset('upload/services/'. $service->image) }}" alt="{{ $service->title }}">
                            </a>
                            <div class="body">
                                <div class="wrapper bg-light">
                                    <div class="icon-area">
                                        <span>{{ $loop->iteration }}</span>
                                    </div>
                                    <div class="inner">
                                        <h6 class="title">{{ $service->title }}</h6>
                                        <p class="disc">{{ substr($service->short_description,0,60)  }}</p>
                                        <a href="{{ route('site.service-details', $service->slug) }}"
                                           class="arrow-btn-read-more">
                                            Read More <i class="fa-thin fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ingle srevice area end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- rts cta area -->
    <div class="cta-inner-area bg_image ptb--120">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-center">
                        <div class="pre-title-area">
                            <img src="{{ asset('site/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Work with us</span>
                        </div>
                        <h2 class="title">Have a Project in mind? <br>
                            Do not hesitate to say hello.</h2>
                        <a href="#" class="rts-btn  btn-border radious-3 mt--50">Let’s Build<i
                                class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area -->


    @include('site.footer')

@endsection
