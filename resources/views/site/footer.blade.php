<!-- header three area start -->
<!-- rts footer area start -->
<div class="rts-footer-area social-jumpanimation @@border">
    <div class="rts-copyright-area-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right-area-inner-two">
                        <p class="disc">Copyright 2024. All Rights Reserved For Renovate.</p>
                        <div class="right">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts footer area end -->
<!-- header three area end -->
