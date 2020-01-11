<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light shadow-lg text-left py-5 px-4 px-sm-5">
      <h5 class="font-weight-light text-center">Upload the proper excel as per given format</h5>
      <form class="pt-3" action="<?= base_url();?>index.php/Books/upload_excel_data" enctype="multipart/form-data" method="POST">
        <div class="form-group">
          <input type="file" class="file-upload-default" required accept=".xls, .xlsx" name="booksExcel">
          <div class="input-group col-xs-12">
            <input type="text" name="banner1name" class="form-control file-upload-info" disabled placeholder="Choose Book Excel">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-warning text-white" type="button">Choose</button>
            </span>
          </div>
        </div>
        <h6 class="font-weight-light text-center">The prescribed format is here <a href="<?= base_url();?>index.php/Books/download_sample">Download!!</a></h6>

        <div class="mt-3">
          <button type="submit" name="importBooks" class="btn btn-block btn-primary font-weight-medium ">Add New Books</button>
        </div>
      </form>

    </div>
  </div>
</div>
