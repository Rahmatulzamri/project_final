<nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color: #333; background-image: linear-gradient(to bottom, #333, #444); box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{ asset('admin/template/assets/images/your-logo.png')}}" alt="logo" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid #fff;" />
        </a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu" style="color: #fff; font-size: 24px;"></span>
        </button>   
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="{{ asset('admin/template/assets/images/your-profile-picture.jpg')}}" alt="" style="width: 30px; height: 30px; border: 2px solid #fff;">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name" style="color: #fff; font-size: 16px;">Your Name</p>
                        <i class="mdi mdi-menu-down d-none d-sm-block" style="color: #fff; font-size: 24px;"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0" style="color: #fff; font-size: 18px;">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-success" style="color: #fff; font-size: 24px;"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1" style="color: #fff; font-size: 16px;">Settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="/login">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger" style="color: #fff; font-size: 24px;"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1" style="color: #fff; font-size: 16px;">Log out</p>                           
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <p class="p-3 mb-0 text-center" style="color: #fff; font-size: 16px;">Advanced settings</p>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing" style="color: #fff; font-size: 24px;"></span>
        </button>
    </div>
</nav>