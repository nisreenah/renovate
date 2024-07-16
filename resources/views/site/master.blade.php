<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ \App\Helpers\SiteHelper::aboutUs()->description }}">
    <meta name="keywords" content="{{ \App\Helpers\SiteHelper::aboutUs()->title }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ \App\Helpers\SiteHelper::aboutUs()->name }}</title>
    <link rel="shortcut icon" type="image/x-icon"
          href="{{ asset('upload/aboutUs/'.\App\Helpers\SiteHelper::aboutUs()->logo) }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/bootstrap.min.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/metismenu.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">

    <style>
        .breadcrumb-area-bg {
            background-image: url({{ asset('upload/aboutUs/'. \App\Helpers\SiteHelper::aboutUs()->header_image) }});
        }
    </style>

    @yield('styles')
</head>

<body class="portfolio-boxes">
<!-- header three area start -->
<!-- header three area start -->
<header class="header-three five seven header--sticky" style="position: relative; background: #fff;">
    <a href="{{ route('site.home') }}" class="logo-area">
        <img src="{{ asset('upload/aboutUs/'. \App\Helpers\SiteHelper::aboutUs()->logo) }}" alt="logo">
    </a>
    <div class="header-right">
        <div class="nav-area-center">
            <nav class="navigation">
                <ul class="parent-ul">
                    <li><a href="{{ route('site.home') }}">Home</a></li>

                    <li class="has-dropdown">
                        <a class="nav-link" href="{{ route('site.about-us') }}">About Us</a>
                    </li>

                    <li><a href="{{ route('site.teams') }}">Teams</a></li>
                    <li><a href="{{ route('site.services') }}">Services</a></li>
                    <li><a href="{{ route('site.projects') }}">Projects</a></li>
                    <li><a href="{{ route('site.contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="action-area" id="menu-btn">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                    <rect x="6" width="18" height="2" fill="#D9D9D9"/>
                    <rect x="10" y="14" width="14" height="2" fill="#D9D9D9"/>
                    <rect y="7" width="24" height="2" fill="#D9D9D9"/>
                </svg>
            </div>
            <span>Menu</span>
        </div>
    </div>
</header>
<!-- header three area end -->
<!-- header three area end -->

@yield('content')

<!-- search area start -->
<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>
<!-- search area end -->


<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- back to top end -->


<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset('upload/aboutUs/'.\App\Helpers\SiteHelper::aboutUs()->logo) }}" alt="Innovate">
        </div>
        <div class="inner-content">
            <p class="disc">{{ \App\Helpers\SiteHelper::aboutUs()->description }}</p>
            <div class="contact-information--sidebar">
                <h6 class="title">Contact Info</h6>
                <div class="single-info">
                    <a href="https://api.whatsapp.com/send?phone={{ \App\Helpers\SiteHelper::aboutUs()->phone }}">
                        {{ \App\Helpers\SiteHelper::aboutUs()->phone }}</a>

                </div>
                <div class="single-info">
                    <a href="#">{{ \App\Helpers\SiteHelper::aboutUs()->address }}</a>
                </div>
                <div class="single-info">
                    <a href="#">{{ \App\Helpers\SiteHelper::aboutUs()->email }}</a>
                </div>
                <h6 class="title mt--30">Office Address</h6>
                <div class="single-info">
                    <a href="#">{{ \App\Helpers\SiteHelper::aboutUs()->address }}</a>
                </div>
                <div class="rts-social-style-one">
                    <ul>
                        @if(!empty(\App\Helpers\SiteHelper::aboutUs()->facebook))
                            <li>
                                <a href="{{ \App\Helpers\SiteHelper::aboutUs()->facebook }}">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                        @endif

                        @if(!empty(\App\Helpers\SiteHelper::aboutUs()->twiiter))
                            <li>
                                <a href="{{ \App\Helpers\SiteHelper::aboutUs()->twiiter }}">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                        @endif

                        @if(!empty(\App\Helpers\SiteHelper::aboutUs()->tiktok))
                            <li>
                                <a href="{{ \App\Helpers\SiteHelper::aboutUs()->tiktok }}">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </li>
                        @endif

                        @if(!empty(\App\Helpers\SiteHelper::aboutUs()->snapchat))
                            <li>
                                <a href="{{ \App\Helpers\SiteHelper::aboutUs()->snapchat }}">
                                    <i class="fab fa-snapchat"></i>
                                </a>
                            </li>
                        @endif

                        @if(!empty(\App\Helpers\SiteHelper::aboutUs()->linkedin))

                            <li>
                                <a href="{{ \App\Helpers\SiteHelper::aboutUs()->linkedin }}">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        @endif

                        @if(!empty(\App\Helpers\SiteHelper::aboutUs()->instagram))

                            <li>
                                <a href="{{ \App\Helpers\SiteHelper::aboutUs()->instagram }}">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="footer">
                <h4 class="title">Got a project in mind?</h4>
                <a href="{{ route('site.contact') }}" class="rts-btn btn-primary">Let's talk</a>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu text-center" id="mobile-menu-active">
                <li><a href="{{ route('site.home') }}" class="main">Home</a></li>
                <li><a href="{{ route('site.about-us') }}" class="main">About Us</a></li>
                <li><a href="{{ route('site.teams') }}" class="main">Teams</a></li>
                <li><a href="{{ route('site.services') }}" class="main">Services</a></li>
                <li><a href="{{ route('site.projects') }}" class="main">Projects</a></li>
                <li><a href="{{ route('site.contact') }}" class="main">Contact</a></li>
            </ul>
        </nav>

        <div class="rts-social-style-one pl--20 mt--100">
            <ul>
                @if(!empty(\App\Helpers\SiteHelper::aboutUs()->facebook))
                    <li>
                        <a href="{{ \App\Helpers\SiteHelper::aboutUs()->facebook }}">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                @endif

                @if(!empty(\App\Helpers\SiteHelper::aboutUs()->twiiter))
                    <li>
                        <a href="{{ \App\Helpers\SiteHelper::aboutUs()->twiiter }}">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                @endif

                @if(!empty(\App\Helpers\SiteHelper::aboutUs()->tiktok))
                    <li>
                        <a href="{{ \App\Helpers\SiteHelper::aboutUs()->tiktok }}">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                @endif
            </ul>
            <ul>
                @if(!empty(\App\Helpers\SiteHelper::aboutUs()->snapchat))
                    <li>
                        <a href="{{ \App\Helpers\SiteHelper::aboutUs()->snapchat }}">
                            <i class="fab fa-snapchat"></i>
                        </a>
                    </li>
                @endif

                @if(!empty(\App\Helpers\SiteHelper::aboutUs()->linkedin))

                    <li>
                        <a href="{{ \App\Helpers\SiteHelper::aboutUs()->linkedin }}">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                @endif

                @if(!empty(\App\Helpers\SiteHelper::aboutUs()->instagram))

                    <li>
                        <a href="{{ \App\Helpers\SiteHelper::aboutUs()->instagram }}">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->


<div class="grid-line">
    <div class="grid-lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>


<!-- start loader -->
<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End loader -->


<div id="anywhere-home">
</div>

<!-- scripts -->
<script src="{{ asset('site/assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('site/assets/js/vendor/waw.js') }}"></script>

<!-- gsap plugins -->
<script src="{{ asset('site/assets/js/vendor/gsap.js') }}"></script>
<script src="{{ asset('site/assets/js/vendor/metismenu.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/scrolltiger.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/scrolltoplugin.js') }}"></script>
<!-- <script src="assets/js/plugins/smoothscroll.js"></script> -->
<script src="{{ asset('site/assets/js/plugins/splittext.js') }}"></script>
<!-- gsap plugins end-->

<script src="{{ asset('site/assets/js/vendor/magnifying-popup.js') }}"></script>

<!-- swiper JS 10.2.0 -->
<script src="{{ asset('site/assets/js/plugins/swiper.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('site/assets/js/vendor/waypoint.js') }}"></script>
<script src="{{ asset('site/assets/js/vendor/chroma.min.js') }}"></script>
<!-- bootstrap 5.0.2 -->
<script src="{{ asset('site/assets/js/plugins/bootstrap.min.js') }}"></script>
<!-- dymanic Contact Form -->
<script src="{{ asset('site/assets/js/plugins/contact.form.js') }}"></script>

<!-- main Js -->
<script src="{{ asset('site/assets/js/main.js') }}"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function () {
        $('#leaveCommentForm').submit(function (event) {

            event.preventDefault(); // Prevent the form from submitting normally

            var name = $('#name').val();
            var comment = $('#comment').val();
            var project_id = $('#project_id').val();
            var csrf_token = $('#csrf_token').val();

            const resultLabel = document.createElement('label')

            axios({
                method: 'post',
                url: '{{ route('site.leave-comment') }}',
                csrfCookieName: csrf_token,
                xsrfCookieName: 'XSRF-TOKEN',
                xsrfHeaderName: 'X-XSRF-TOKEN',
                data: {
                    name: name,
                    project_id: project_id,
                    comment: comment
                }
            }).then((response) => {
                // console.log('success');
                // console.log(response.data.message);
                resultLabel.textContent = response.data.message;
                resultLabel.style.color = 'green';
                document.getElementById('leaveCommentForm').insertBefore(resultLabel, document.getElementById('name'));
            }, (error) => {
                console.log('error');
                // console.log(error.response.data.errors);
                const errorMessages = error.response.data.errors;
                Object.keys(errorMessages).forEach(key => {
                    // console.log('key: ' + key + ' value: ' + errorMessages[key][0]);
                    console.log(errorMessages[key][0]);
                    resultLabel.textContent = errorMessages[key][0];
                    resultLabel.style.color = 'red';
                    console.log(document.getElementById(key));
                    document.getElementById(key).appendChild(resultLabel)
                    document.getElementById('leaveCommentForm').insertBefore(resultLabel, document.getElementById('name'));
                });
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#contactForm').submit(function (event) {

            event.preventDefault(); // Prevent the form from submitting normally

            var name = $('#name').val();
            var message = $('#message').val();
            var email = $('#email').val();
            var csrf_token = $('#csrf_token').val();

            const resultLabel = document.createElement('label')

            axios({
                method: 'post',
                url: '{{ route('site.send-message') }}',
                csrfCookieName: csrf_token,
                xsrfCookieName: 'XSRF-TOKEN',
                xsrfHeaderName: 'X-XSRF-TOKEN',
                data: {
                    name: name,
                    email: email,
                    message: message
                }
            }).then((response) => {
                console.log('success');
                console.log(response.data.message);
                resultLabel.textContent = response.data.message;
                resultLabel.style.color = 'green';
                document.getElementById('contactForm').insertBefore(resultLabel, document.getElementById('name'));
            }, (error) => {
                console.log('error');
                const errorMessages = error.response.data.errors;
                Object.keys(errorMessages).forEach(key => {
                    const resultLabel = document.createElement('label')
                    console.log(errorMessages[key][0]);
                    resultLabel.textContent = errorMessages[key][0];
                    resultLabel.style.color = 'red';
                    console.log(document.getElementById(key));
                    document.getElementById(key).appendChild(resultLabel)
                    document.getElementById('contactForm').insertBefore(resultLabel, document.getElementById('name'));
                });
            });
        });
    });
</script>

@yield('scripts')
</body>

</html>
