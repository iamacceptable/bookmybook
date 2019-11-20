<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/dashboard">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/all_users">
        <i class="ti-user menu-icon"></i>
        <span class="menu-title">All Users</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/all_orders">
        <i class="ti-shield menu-icon"></i>
        <span class="menu-title">Orders</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/bmb_wallet">
        <i class="ti-wallet menu-icon"></i>
        <span class="menu-title">BMB Wallet</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/refer_n_earn">
        <i class="ti-share menu-icon"></i>
        <span class="menu-title">Refer &amp; Earn</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#faq" aria-expanded="false" aria-controls="ui-basic">
        <i class="ti-bag menu-icon"></i>
        <span class="menu-title">FAQ</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="faq">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/add_new_faq">Add New FAQ</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/all_faq">All FAQ</a></li>
        </ul>
      </div>
    </li>
    <!-- <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#address" aria-expanded="false" aria-controls="ui-basic">
        <i class="ti-location-pin menu-icon"></i>
        <span class="menu-title">Address</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="address">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/city">City</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/state">State</a></li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#books" aria-expanded="false" aria-controls="ui-basic">
        <i class="ti-book menu-icon"></i>
        <span class="menu-title">Books</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="books">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/add_new_category">Add New Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/add_new_book">Add New Book</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/add_multiple_book">Add Multiple Books</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/all_books">All Books</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/books_not_found">
        <i class="ti-support menu-icon"></i>
        <span class="menu-title">Books Not Found</span>
      </a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#recipet" aria-expanded="false" aria-controls="ui-basic">
        <i class="ti-receipt menu-icon"></i>
        <span class="menu-title">Reciepts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="recipet">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/bills">Bills</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= base_url();?>index.php/Admin/reports">Reports</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url();?>index.php/Admin/feedbacks">
        <i class="ti-thought menu-icon"></i>
        <span class="menu-title">Feedbacks</span>
      </a>
    </li>
  </ul>
</nav>