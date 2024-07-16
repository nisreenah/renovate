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
                            <a class="active" href="#">Service Details</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">{{ $service->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->


    <!-- service details area start -->
    <div class="service-details-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pr--70 pr_md--10 pr_sm--10">
                    <!-- service left side bar area start -->
                    <div class="service-left-sidebar-wrapper">
                        <!-- service left sidebar single wized -->
                        <div class="service-left-sidebar-wized mb--50">
                            <div class="topa-rea">
                                <h4 class="title">All Services</h4>
                            </div>
                            <div class="body">
                                @foreach($services as $service)
                                    <!-- inglle short service -->
                                    <a href="{{ route('site.service-details', $service->slug) }}"
                                       class="single-short-service">
                                        <span class="number">{{ $loop->iteration }}</span>
                                        <p class="name">{{ $service->title }}</p>
                                        <i class="fa-light fa-arrow-right"></i>
                                    </a>
                                    <!-- inglle short service end -->
                                @endforeach
                            </div>
                        </div>
                        <!-- service left sidebar single wized end -->
                        <!-- service left sidebar single wized -->
                        <div class="service-left-sidebar-wized">
                            <div class="topa-rea">
                                <h4 class="title">Let's start new project.</h4>
                            </div>
                            <div class="body">
                                <!-- form area start -->
                                <form action="#" id="contactForm">
                                    <input type="hidden" id="csrf_token" name="csrf_token" value="{{ csrf_token() }}">
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                    <input type="email" name="email" id="email" placeholder="Your Email">
                                    <textarea id="message" name="message" placeholder="Message"></textarea>
                                    <button id="submitContact" type="submit" class="rts-btn btn-primary">Send Message
                                    </button>
                                </form>
                                <!-- form area end -->
                            </div>
                        </div>
                        <!-- service left sidebar single wized end -->
                    </div>
                    <!-- service left side bar area end -->
                </div>
                <div class="col-lg-8 mt_md--50 mt_sm--50">
                    <!-- service -details right-content start -->
                    <div class="service-details-content-right bg-light p-5">
                        <div class="large-image">
                            <img src="{{ asset('upload/services/'.$service->image) }}"
                                 alt="service" class="img-fluid"
                                 style="height: 400px;object-fit: fill;">
                        </div>
                        <h3 class="title-main-s">
                            {{ $service->title }}
                        </h3>
                        <p class="disc">
                            {{ $service->short_description }}
                        </p>
                        <p class="disc">
                            {!! $service->long_description  !!}
                        </p>
                    </div>
                    <!-- service -details right-content end -->
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->

    @include('site.footer')

@endsection
