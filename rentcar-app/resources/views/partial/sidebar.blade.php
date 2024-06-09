<!-- Sidebar HTML -->
<nav class="sidebar sidebar-offcanvas">
    <div class="sidebar-brand-wrapper d-flex align-items-center justify-content-center fixed-top">
        <h5 class="mb-0 font-weight-normal">Final Project Bootcamp</h5>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic d-flex align-items-center">
                    <div class="count-indicator position-relative">
                        <img class="img-xs rounded-circle" src="{{ asset('admin/template/assets/images/Rent_Car.png') }}"
                            alt="">
                        <span class="count bg-success position-absolute"></span>
                    </div>
                    <div class="profile-name ml-3">
                        <h5 class="mb-0 font-weight-normal">Kelompok 13</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown" class="text-muted ml-auto">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item d-flex align-items-center">
                        <div class="preview-thumbnail">
                            <div
                                class="preview-icon bg-dark rounded-circle d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content ml-2">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item d-flex align-items-center">
                        <div class="preview-thumbnail">
                            <div
                                class="preview-icon bg-dark rounded-circle d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-onepassword text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content ml-2">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <div class="dropdown-divider"></div>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @auth


            <li class="nav-item menu-items">
                <a class="nav-link" href="/merek">
                    <span class="menu-icon">
                        <i class="mdi mdi-car"></i>
                    </span>
                    <span class="menu-title">Book a Car</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/pelanggan">
                    <span class="menu-icon">
                        <i class="mdi mdi-view-list"></i>
                    </span>
                    <span class="menu-title">Pelanggan</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/booking">
                    <span class="menu-icon">
                        <i class="mdi mdi-calendar-multiple-check"></i>
                    </span>
                    <span class="menu-title">Booking Calendar</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/mobil">
                    <span class="menu-icon">
                        <i class="mdi mdi-calendar-multiple-check"></i>
                    </span>
                    <span class="menu-title">Mobil</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="/administrator">
                    <span class="menu-icon">
                        <i class="mdi mdi-account"></i>
                    </span>
                    <span class="menu-title">Admin</span>
                </a>
            </li>
        @endauth
        <li class="nav-item menu-items">
            <a class="nav-link" href="/pengguna">
                <span class="menu-icon">
                    <i class="mdi mdi-account"></i>
                </span>
                <span class = "menu-title">Pengguna</span>
            </a>
        </li>
        @auth
            <li class="nav-item">
                <a class="nav-link bg-danger text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
</nav>

<style>
    .sidebar-offcanvas {
        background-color: #2f3640;
        color: #fff;
    }

    .sidebar.nav-item.nav-link {
        color: #dcdde1;
    }

    .sidebar.nav-item.nav-link:hover {
        background-color: #4b6584;
        color: #fff;
    }

    .profile-desc {
        padding: 15px;
    }

    .profile-pic.count {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        top: 0;
        right: 0;
    }

    .profile-pic.count-indicator {
        position: relative;
        display: inline-block;
    }

    .profile-name {
        display: inline-block;
        margin-left: 10px;
    }

    .dropdown-menu.preview-item {
        padding: 10px 20px;
    }

    .dropdown-menu.preview-item:hover {
        background-color: #4b6584;
        color: #fff;
    }

    .dropdown-item.preview-icon {
        width: 30px;
        height: 30px;
    }
</style>
