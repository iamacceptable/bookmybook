<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <form class="pt-3" action="<?= base_url();?>index.php/Books/add_new_category" enctype="multipart/form-data" method="POST">
        <div class="form-group">
          <input type="text" name="cname" class="form-control form-control-sm" id="sname" placeholder="Enter Category Name" required>
          <small class="text-danger"><?= form_error('cname');?></small>
        </div>
        <div class="form-group">
          <input type="file" class="file-upload-default" name="cimg" >
          <div class="input-group col-xs-12">
            <input type="text" name="banner1name" class="form-control file-upload-info" disabled placeholder="Choose Category Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-warning text-white" type="button">Choose</button>
            </span>
          </div>
          <small class="text-danger"><?= form_error('cimg');?></small>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary font-weight-medium ">Add New Category</button>
        </div>
      </form>
    </div>
  </div>
</div>
