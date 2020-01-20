<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <form class="pt-3" action="<?= base_url();?>index.php/Sliders/add_new_image" enctype="multipart/form-data" method="POST">
        <div class="form-group">
          <label for="selectImageSlider">Select Slider</label>
          <select name="sno" class="form-control form-control-sm" id="gender">
            <option value="1">1st Slide</option>
            <option value="2">2nd Slide</option>
            <option value="3">3rd Slide</option>
            <option value="4">4th Slide</option>
            <option value="5">5th Slide</option>
          </select>
        </div>
        <div class="form-group">
          <input type="file" class="file-upload-default" name="simg" >
          <div class="input-group col-xs-12">
            <input type="text" name="banner1name" class="form-control file-upload-info" disabled placeholder="Choose Slider Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-warning text-white" type="button">Choose</button>
            </span>
          </div>
          <small class="text-danger"><?= form_error('simg');?></small>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary font-weight-medium ">Update Slider</button>
        </div>
      </form>
    </div>
  </div>
</div>
