<?php
	$this->view('main_layout/header');
?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="auth-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light shadow-lg text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= base_url();?>assets/images/logo.png" alt="logo">
              </div>
              <h4>Hello! let's get to the Panel</h4>
              <h6 class="font-weight-light">Sign in to given ceredentials.</h6>
              <form class="pt-3" action="<?= base_url();?>index.php/Admin/dashboard" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control" id="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<?php 
	$this->view('main_layout/footer');
?>