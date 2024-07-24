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
                            <a class="active" href="#">Projects</a>
                        </div>
                        <div class="bottom-title">
                            <h1 class="title">All Projects</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->


    <!-- portfolio column 4 area start -->
    <div class="rts-portfolio-area-col-4 rts-section-gap rts_portfolio_animation-wrapper">
        <div class="container-30 p-5">
            <div class="row g-5">
                @foreach($projects as $project)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="portfolio-style-custom-4 rts-portfolio__item">
                            <a href="{{ route('site.project-details', $project->slug) }}" class="thumbnail">
                                <img style="height: 500px !important" src="{{ asset('upload/projects/'.$project->image) }}" alt="{{ $project->name }}">
                            </a>
                            <div class="inner-content">
                                <a href="{{ route('site.project-details', $project->slug) }}">
                                    <h4 class="title">{{ $project->title }}</h4>
                                </a>
                                <span>{{ $project->category->name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- portfolio column 4 area end -->

    @include('site.footer')

@endsection
