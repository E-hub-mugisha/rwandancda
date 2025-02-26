<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
                <span>{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="dropdown-item dropdown-footer" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class="nav-icon far fa-sign-out-alt text-info"></i>
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ URL::asset('img/logo2.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users') }}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p> Users </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('workers') }}" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p> Workers </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('posts') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('partners') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Partners
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories') }}" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('resources') }}" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Resources
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('stories') }}" class="nav-link">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Stories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('members') }}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Members</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('engagements') }}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Engagements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('subscribers') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Subscribers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('galleries') }}" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('programs') }}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Programs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Comments</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('calendars') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Calendars</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Post Types</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('banners.index') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Banners</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>