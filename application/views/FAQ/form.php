<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <h6 class="font-weight-light text-center">Fill the details of the FAQs  </h6>
      <form class="pt-3" action="<?= base_url();?>index.php/Admin/dashboard" method="POST">
        <div class="form-group">
          <input type="text" name="sname" class="form-control form-control-sm" id="fques" placeholder="Enter FAQ Question">
        </div>
        <div class="form-group">
          <input type="text" name="semail" class="form-control form-control-sm" id="fans" placeholder="Enter Answer">
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary font-weight-medium ">Add New FAQ</button>
        </div>
      </form>
    </div>
  </div>
</div>
