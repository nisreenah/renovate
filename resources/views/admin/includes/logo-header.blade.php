<!-- Logo Header -->
<div class="logo-header" data-background-color="dark">
    <a href="{{ route('admin.aboutUs.index') }}" class="logo">
        <img
            src="{{ asset('upload/aboutUs/'. \App\Helpers\SiteHelper::aboutUs()->logo) }}"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
        />
    </a>
    <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
        </button>
    </div>
    <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
    </button>
</div>
<!-- End Logo Header -->
