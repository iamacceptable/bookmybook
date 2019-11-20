<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <h6 class="font-weight-light text-center">Fill the details of the Book  </h6>
      <form class="pt-3" action="<?= base_url();?>index.php/Admin/dashboard" method="POST">
        <div class="form-group">
          <input type="number" name="sphone" class="form-control form-control-sm" id="sphone" placeholder="ISBN Number">
        </div>
        <div class="form-group">
          <input type="text" name="sname" class="form-control form-control-sm" id="sname" placeholder="Book Title">
        </div>
        <div class="form-group">
          <input type="text" name="semail" class="form-control form-control-sm" id="semail" placeholder="Book Description">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Select Category</label>
          <select name="gender" class="form-control form-control-sm" id="gender">
            <option value="male">Coding</option>
            <option value="female">Aptitude</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Author Name">
        </div>
        <div class="form-group">
          <input type="text" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Publisher Name">
        </div>
        <div class="form-group">
          <input type="text" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Volume">
        </div>
        <div class="form-group">
          <input type="text" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Year of Publication">
        </div>
        <div class="form-group">
          <input type="text" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Edition">
        </div>
        <div class="form-group">
          <input type="text" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Binding">
        </div>
        <div class="form-group">
          <input type="text" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="No. of Pages">
        </div>
        <div class="form-group">
          <input type="number" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Price (₹)">
        </div>
        <div class="form-group">
          <input type="file" class="file-upload-default" name="banner1">
          <div class="input-group col-xs-12">
            <input type="text" name="banner1name" class="form-control file-upload-info" disabled placeholder="Choose Book Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-warning text-white" type="button">Choose</button>
            </span>
          </div>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary font-weight-medium ">Add New Book</button>
        </div>
      </form>
    </div>
  </div>
</div>
