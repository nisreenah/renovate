<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('upload/aboutUs/'. \App\Helpers\SiteHelper::aboutUs()->logo) }}"
                     alt="navbar brand" class="navbar-brand" height="20"/>
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
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.aboutUs.index') }}">
                                    <span class="sub-item">About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.contacts.index') }}">
                                    <span class="sub-item">Contact Messages</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Categories</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.categories.index') }}">
                                    <span class="sub-item">All Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.categories.create') }}">
                                    <span class="sub-item">Add Category</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Services</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.services.index') }}">
                                    <span class="sub-item">All  Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.services.create') }}">
                                    <span class="sub-item">Add Service</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Projects</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.projects.index') }}">
                                    <span class="sub-item">All Projects</span>
                                </a>
                                <a href="{{ route('admin.projects.create') }}">
                                    <span class="sub-item">Add Project</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#comments">
                        <i class="fas fa-desktop"></i>
                        <p>Comments</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="comments">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.comments.index') }}">
                                    <span class="sub-item">All Comments</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Teams</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.teams.index') }}">
                                    <span class="sub-item">All Members Teams</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.teams.create') }}">
                                    <span class="sub-item">Add Member</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
