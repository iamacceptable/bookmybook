<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <h6 class="font-weight-light text-center">Upload the proper excel/csv as per given format</h6>
      <form class="pt-3" action="<?= base_url();?>index.php/Admin/dashboard" method="POST">
        <div class="form-group">
          <input type="file" class="file-upload-default" name="banner1">
          <div class="input-group col-xs-12">
            <input type="text" name="banner1name" class="form-control file-upload-info" disabled placeholder="Choose Book Excel/CSV">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-warning text-white" type="button">Choose</button>
            </span>
          </div>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary font-weight-medium ">Add New Books</button>
        </div>
      </form>
    </div>
  </div>
</div>
