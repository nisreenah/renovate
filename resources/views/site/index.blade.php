@extends('site.master')

@section('content')
    <!-- rts project area start -->
    <div class="rts-project-area">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <!-- swiper product one wrapper -->
                    <div class="swiper-product-one-wrapper">
                        <div class="swiper swiper-product-one-box-page">
                            <div class="swiper-wrapper">
                                @foreach($projects as $project)
                                    <div class="swiper-slide">
                                        <!-- single swiper-item -->
                                        <div class="single-product-one">
                                            <span class="number">{{ $loop->iteration }}</span>
                                            <a href="{{ route('site.project-details', $project->slug) }}" class="thumbnail">
                                                <img src="{{ asset('upload/projects/'. $project->image) }}"
                                                     alt="product">
                                            </a>
                                            <div class="inenr-content-absolute">
                                                <a href="{{ route('site.project-details', $project->slug) }}">
                                                    <h3 class="title">{{ $project->title }}</h3>
                                                </a>
                                                <span class="category">{{ $project->category->name }}</span>
                                            </div>
                                        </div>
                                        <!-- single swiper-item end -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination-portfolio-boxes">
                            <div class="activeslide">1</div>
                            <div class="swiper-paginations"></div>
                            <div class="totalslide">{{ $projects->count() }}</div>
                            <!-- </div> -->
                        </div>
                        <div class="swiper-next-prev-wrapper">
                            <div class="swiper-button-next">Next</div>
                            <div class="swiper-button-prev">Previous</div>
                        </div>
                    </div>
                    <!-- swiper product one wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts project area end -->
@endsection
