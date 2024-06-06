<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html">
            <img id="rentalCarLogo" src="https://th.bing.com/th/id/OIP.Ef-vVAP7Xpqcw40ICVNXjQHaHa?w=690&h=690&rs=1&pid=ImgDetMain" alt="logo" style="width: 105px; height: 80px;" />
        </a>
    </div>
  <ul class="nav">
      <li class="nav-item profile">
          <div class="profile-desc">
              <div class="profile-pic">
                  <div class="count-indicator">
                      <img class="img-xs rounded-circle " src="{{ asset('admin/template/assets/images/faces/face15.jpg')}}" alt="">
                      <span class="count bg-success"></span>
                  </div>
                  <div class="profile-name">
                      <h5 class="mb-0 font-weight-normal">Kelompok 13</h5>
                      <span>Gold Member</span>
                  </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                  <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-settings text-primary"></i>
                          </div>
                      </div>
                      <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                      </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-onepassword  text-info"></i>
                          </div>
                      </div>
                      <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                      </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-calendar-today text-success"></i>
                          </div>
                      </div>
                      <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                      </div>
                  </a>
              </div>
          </div>
      </li>
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
      <li class="nav-item menu-items">
        <a class="nav-link" href="/bookcar">
            <span class="menu-icon">
                <i class="mdi mdi-car"></i>
            </span>
            <span class="menu-title">Book a Car</span>
        </a>
    </li>  
      <li class="nav-item menu-items">
          <a class="nav-link" href="/booking">
              <span class="menu-icon">
                  <i class="mdi mdi-view-list"></i>
              </span>
              <span class="menu-title">View Bookings</span>
          </a>
      </li>
      <li class="nav-item menu-items">
          <a class="nav-link" href="#">
              <span class="menu-icon">
                  <i class="mdi mdi-calendar-multiple-check"></i>
              </span>
              <span class="menu-title">Booking Calendar</span>
          </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/reservasi">
            <span class="menu-icon">
                <i class="mdi mdi-calendar-multiple-check"></i>
            </span>
            <span class="menu-title">Reservasi</span>
        </a>
    </li>
  </ul>
</nav>
