@extends('site.master')

@section('styles')
    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline > li {
            margin: 20px 0;
            padding-left: 20px;
        }

        ul.timeline > li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
    </style>
@endsection

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
                            <a class="active" href="#"> Project Details</a>
                        </div>
                        <div class="bottom-title">
                            <h6 class="title">{{ $project->title }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread croumba rea end -->
    <!-- header three area end -->

    <!-- blog details area start -->
    <div class="rts-blog-details-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{ asset('upload/projects/'. $project->image) }}" class="img-fluid"
{{--                                 style="height: 430px;object-fit: fill;" --}}
                                 alt="{{ $project->title }}">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>By {{ $project->team->name }}</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>Start Date: {{ $project->start_date }}</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-tags"></i>
                                    <span>Client Name: {{ $project->client_name }}</span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <span>{{ $project->location }}</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="fa-solid fa-clock"></i>
                                    <span>Achievement Duration: {{ $project->duration }} months</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="fa-solid fa-list"></i>
                                    <span>Category: {{ $project->category->name }}</span>
                                </div>
                                <!-- single infoe end -->
                            </div>

                            <h3 class="title animated fadeIn">{{ $project->title }}</h3>

                            <h6>Project Overview</h6>
                            <p class="disc">
                                {!! $project->overview !!}
                            </p>

                            <div class="mb-2">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($project->gallery as $gallery)
                                            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                                                <img class="d-block w-100"
                                                     style="height: 380px;object-fit: fill;"
                                                     src="{{ asset('upload/projects/gallery/'. $gallery->image) }}"
                                                     alt="{{$loop->iteration}}">
                                            </div>
                                        @endforeach
                                    </div>

                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row align-items-center mb-5">
                                <div class="col-lg-6 col-md-12">
                                    <!-- tags details -->
                                    <div class="details-tag">
                                        <h6>Tags:</h6>
                                        <button>test</button>
                                        @foreach(array_map('intval', explode(',', $project->tags)) as $key => $tag)
                                            <button class="mb-3">{{ $tag }}</button>
                                        @endforeach
                                    </div>
                                    <!-- tags details End -->
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="details-share">
                                        <h6>Share:</h6>
                                        <button>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                               target="blank"><i class="fab fa-facebook-f"></i></a>
                                        </button>

                                        <button>
                                            <a href="https://twitter.com/intent/tweet?text={{$project->title}}&url={{ url()->full() }}"
                                               target="blank"><i class="fab fa-twitter"></i></a>
                                        </button>
                                        <button>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}"
                                               target="blank"><i class="fab fa-linkedin-in"></i></a>
                                        </button>
                                        <button>
                                            <a class="pinterest"
                                               href="https://pinterest.com/pin/create/button/?url={{ url()->full() }}&media={{ $project->image }}&description={{ $project->title }}E"
                                               target="blank" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            @if(!empty($project->scope))
                                <h6>Project Scope</h6>
                                <p class="disc">
                                    {{ $project->scope }}
                                </p>
                            @endif

                            @if(!empty($project->challenge))
                                <h6>Project Challenges</h6>
                                <p class="disc">
                                    {{ $project->challenge }}
                                </p>
                            @endif

                            @if(!empty($project->solution))
                                <h6>Project Solution</h6>
                                <p class="disc">
                                    {{ $project->solution }}
                                </p>
                            @endif

                            @if($project->comments()->active()->count() > 0)
                                <div class="row">
                                    <h6>Latest Comments</h6>
                                    <div class="">
                                        <ul class="timeline">
                                            @foreach($project->comments()->active()->get() as $comment)
                                                <li>
                                                    <a class="mb-2"><strong>{{ $comment->name }}</strong></a>
                                                    <a style="color: #0a58ca; float:right">{{ Carbon\Carbon::createFromDate($comment->created_at)->format('d M Y') }}</a>
                                                    <p>{{ $comment->comment }}</p>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                    <!-- single post End-->
                </div>

                <div class="col-xl-4 col-lg-4 pl--60 padding-left-sidebar pl_md--15 pl_sm--5 mt_sm--50 mt_md--50">
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
                                        <span class="number">{{ $service->id }}</span>
                                        <p class="name">{{ $service->title }}</p>
                                        <i class="fa-light fa-arrow-right"></i>
                                    </a>
                                    <!-- inglle short service end -->
                                @endforeach
                            </div>
                        </div>
                        <!-- service left sidebar single wized end -->

                        <div class="service-left-sidebar-wized mb--50">
                            <div class="topa-rea">
                                <h4 class="title">Recent Projects</h4>
                            </div>
                            <div class="wized-body">
                                @foreach($recentProjects as $recentProject)
                                    <div class="recent-post-single">
                                        <div class="thumbnail" style="width: 100px;">
                                            <a href="{{ route('site.project-details', $recentProject->slug) }}">
                                                <img src="{{ asset('upload/projects/' . $recentProject->image) }}"
                                                     style="height:80px; object-fit: fill;" class="image"
                                                     alt="{{ $recentProject->title }}"></a>
                                        </div>
                                        <div class="content-area text-start">
                                            <div class="user">
                                                <i class="fal fa-clock"></i>
                                                <span>{{ \Illuminate\Support\Carbon::createFromDate($recentProject->created_at)->format('d M Y') }}</span>
                                            </div>
                                            <a class="post-title"
                                               href="{{ route('site.project-details', $recentProject->slug) }}">
                                                <h6 class="title">{{ $recentProject->title }}</h6>
                                            </a>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                        </div>

                        <!-- service left sidebar single wized -->
                        <div class="service-left-sidebar-wized mb--50">
                            <div class="topa-rea">
                                <h4 class="title">Leave a comment in this project</h4>
                            </div>
                            <div class="body">
                                <!-- form area start -->
                                <form id="leaveCommentForm" action="#">
                                    <input type="hidden" id="csrf_token" name="csrf_token" value="{{ csrf_token() }}">
                                    <input type="hidden" id="project_id" name="project_id" value="{{ $project->id }}">
                                    <input type="text" id="name" name="name" placeholder="Your Name">
                                    <textarea name="comment" id="comment" placeholder="Your Comment"></textarea>
                                    <button id="submitComment" class="rts-btn btn-primary">Leave Comment</button>
                                </form>
                                <!-- form area end -->
                            </div>
                        </div>

                        <!-- service left sidebar single wized -->
                        <div class="service-left-sidebar-wized mb--50">
                            <div class="topa-rea">
                                <h4 class="title">Achieved By</h4>
                            </div>
                            <div class="body">
                                <div class="author-area reveal">
                                    <div class="thumbnail details mb-3">
                                        <img src="{{ asset('upload/teams/'. $project->team->image) }}"
                                             style="height:300px; object-fit: fill;"
                                             alt="{{ $project->team->name }}">
                                    </div>
                                    <div class="author-details team">
                                        <h5 class="title-g mb-3">{{ $project->team->name }}</h5>
                                        <span
                                            class="title-g mb-3"><strong>{{ $project->team->position }}</strong></span>
                                        <p class="disc title-g">
                                            {{ $project->team->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- service left side bar area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- blog details area end -->

    @include('site.footer')

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
@endsection
