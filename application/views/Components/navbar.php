<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?= base_url();?>assets/images/logo.png" class="" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url();?>assets/images/logo-mini.png" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <!-- <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="ti-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal">New Users</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                2
              </p>
            </div>
          </a>
          <a class="dropdown-item">
            <div class="item-thumbnail">
              <div class="item-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="item-content">
              <h6 class="font-weight-normal">New Students registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                2 Students
              </p>
            </div>
          </a>
        </div>
      </li> -->
      <li class="nav-item nav-profile dropdown">
        <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="<?= base_url();?>assets/images/faces/face28.jpg" alt="profile"/>
        </a> -->
        <a class="nav-link" href="<?= base_url();?>index.php/Admin/logout">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <!-- <a class="dropdown-item">
            <i class="ti-settings text-primary"></i>
            Change Password
          </a> -->
          <a class="dropdown-item" href="<?= base_url();?>index.php/Admin/logout">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="ti-view-list"></span>
    </button>
  </div>
</nav>