<div class="row">
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title text-md-center text-xl-left">Books</p>
        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
          <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $books;?></h3>
          <i class="ti-book icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
        </div>  
        <p class="mb-0 mt-2 text-success"><?= $available_books;?> <span class="text-black ml-1"><small>(Available)</small></span></p>
      </div>
    </div>
  </div>
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title text-md-center text-xl-left">Users</p>
        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
          <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $users;?></h3>
          <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
        </div>  
        <p class="mb-0 mt-2 text-danger"><?= $active;?>% <span class="text-black ml-1"><small>(Active)</small></span></p>
      </div>
    </div>
  </div>
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title text-md-center text-xl-left">Orders</p>
        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
          <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $orders;?></h3>
          <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
        </div>  
      </div>
    </div>
  </div>
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title text-md-center text-xl-left">FAQs</p>
        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
          <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $faq;?></h3>
          <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
        </div>  
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title text-md-center text-xl-left">Books Purchased</p>
        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
          <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?= $books_sold[0]['sum'];?></h3>
          <i class="ti-shopping-cart-full icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
        </div>  
        <p class="mb-0 mt-2 text-danger"><span class="text-black mr-1"><small>By </small></span><?= $books_sold[0]['users'];?><span class="text-black ml-1"><small> Users</small></span></p>
      </div>
    </div>
  </div>
</div>