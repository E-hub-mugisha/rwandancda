<!-- =========================
     TOP NAVBAR
========================= -->

<nav class="main-header navbar navbar-expand">

    <!-- Sidebar Toggle -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link sidebar-toggle"
               data-widget="pushmenu"
               href="#"
               role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <li class="nav-item d-none d-md-inline-block">
            <a href="{{ route('dashboard') }}"
               class="nav-link font-weight-bold">
                Dashboard
            </a>
        </li>
    </ul>


    <!-- Right Navigation -->
    <ul class="navbar-nav ml-auto">

        <!-- User Menu -->
        <li class="nav-item dropdown">

            <a class="nav-link user-menu-link"
               data-toggle="dropdown"
               href="#">

                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>

                <div class="d-none d-md-block">
                    <span class="user-name">
                        {{ Auth::user()->name }}
                    </span>

                    <span class="user-role">
                        Administrator
                    </span>
                </div>

                <i class="fas fa-chevron-down ml-1"
                   style="font-size:9px;color:#718096;">
                </i>

            </a>


            <div class="dropdown-menu dropdown-menu-right user-dropdown">

                <div class="px-3 py-2 mb-1">

                    <div style="
                        font-size:11px;
                        color:#718096;
                        text-transform:uppercase;
                        letter-spacing:.7px;
                        font-weight:700;
                    ">
                        Signed in as
                    </div>

                    <div style="
                        font-size:13px;
                        font-weight:700;
                        color:#294B78;
                        margin-top:3px;
                    ">
                        {{ Auth::user()->email }}
                    </div>

                </div>

                <div class="dropdown-divider"></div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                            class="dropdown-item">

                        <i class="fas fa-sign-out-alt mr-2"
                           style="color:#C99A3E;">
                        </i>

                        {{ __('Log Out') }}

                    </button>

                </form>

            </div>

        </li>

    </ul>

</nav>


<!-- =========================
     SIDEBAR
========================= -->

<aside class="main-sidebar elevation-4">

    <!-- Brand -->
    <a href="/" class="brand-link">

        <img src="{{ URL::asset('img/logo2.png') }}"
             alt="{{ config('app.name', 'Rwanda NCD Alliance') }}"
             class="brand-logo">

        <div class="brand-content">

            <span class="brand-name">
                Rwanda NCD Alliance
            </span>

            <span class="brand-subtitle">
                Administration Portal
            </span>

        </div>

    </a>


    <!-- Sidebar -->
    <div class="sidebar">

        <nav>

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">


                <!-- =====================
                     OVERVIEW
                ====================== -->

                <li class="sidebar-section">
                    Overview
                </li>

                <li class="nav-item">

                    <a href="{{ route('dashboard') }}"
                       class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-th-large"></i>

                        <p>Dashboard</p>

                    </a>

                </li>


                <!-- =====================
                     PEOPLE
                ====================== -->

                <li class="sidebar-section">
                    People
                </li>

                <li class="nav-item">

                    <a href="{{ route('users') }}"
                       class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-users"></i>

                        <p>Users</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('workers') }}"
                       class="nav-link {{ request()->routeIs('workers') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-user-tie"></i>

                        <p>Workers</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('members') }}"
                       class="nav-link {{ request()->routeIs('members') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-user-friends"></i>

                        <p>Members</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('subscribers') }}"
                       class="nav-link {{ request()->routeIs('subscribers') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-envelope"></i>

                        <p>Subscribers</p>

                    </a>

                </li>


                <!-- =====================
                     CONTENT
                ====================== -->

                <li class="sidebar-section">
                    Content
                </li>


                <li class="nav-item">

                    <a href="{{ route('posts') }}"
                       class="nav-link {{ request()->routeIs('posts') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-newspaper"></i>

                        <p>Posts</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('categories') }}"
                       class="nav-link {{ request()->routeIs('categories') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-folder"></i>

                        <p>Categories</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('stories') }}"
                       class="nav-link {{ request()->routeIs('stories') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-book-open"></i>

                        <p>Stories</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('resources') }}"
                       class="nav-link {{ request()->routeIs('resources') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-file-alt"></i>

                        <p>Resources</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('galleries') }}"
                       class="nav-link {{ request()->routeIs('galleries') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-images"></i>

                        <p>Gallery</p>

                    </a>

                </li>


                <!-- =====================
                     PROGRAMS
                ====================== -->

                <li class="sidebar-section">
                    Programs & Partnerships
                </li>


                <li class="nav-item">

                    <a href="{{ route('programs') }}"
                       class="nav-link {{ request()->routeIs('programs') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-project-diagram"></i>

                        <p>Programs</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('partners') }}"
                       class="nav-link {{ request()->routeIs('partners') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-handshake"></i>

                        <p>Partners</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('engagements') }}"
                       class="nav-link {{ request()->routeIs('engagements') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-comments"></i>

                        <p>Engagements</p>

                    </a>

                </li>


                <!-- =====================
                     MEDIA & EVENTS
                ====================== -->

                <li class="sidebar-section">
                    Media & Events
                </li>


                <li class="nav-item">

                    <a href="{{ route('calendars') }}"
                       class="nav-link {{ request()->routeIs('calendars') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-calendar-alt"></i>

                        <p>Calendars</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="{{ route('banners.index') }}"
                       class="nav-link {{ request()->routeIs('banners.*') ? 'active' : '' }}">

                        <i class="nav-icon fas fa-images"></i>

                        <p>Banners</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-comment-dots"></i>

                        <p>Comments</p>

                    </a>

                </li>


                <li class="nav-item">

                    <a href="#"
                       class="nav-link">

                        <i class="nav-icon fas fa-layer-group"></i>

                        <p>Post Types</p>

                    </a>

                </li>


            </ul>

        </nav>

    </div>

</aside>