<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <h6 class="font-weight-light text-center">Fill the details of the User  </h6>
      <form class="pt-3" action="<?= base_url();?>index.php/Admin/dashboard" method="POST">
        <div class="form-group">
          <input type="text" name="sname" class="form-control form-control-sm" id="sname" placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="email" name="semail" class="form-control form-control-sm" id="semail" placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="number" name="sphone" class="form-control form-control-sm" id="sphone" placeholder="Mobile Number">
        </div>
        <div class="form-group">
          <input type="password" name="spassword" class="form-control form-control-sm" id="spassword" placeholder="Password (8-12)">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Select State</label>
          <select name="gender" class="form-control" id="gender">
            <option value="male">up</option>
            <option value="female">uK</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Select City</label>
          <select name="syear" class="form-control" id="gender">
            <option value="1st Year">Delhi</option>
            <option value="2nd Year">Noida</option>
            <option value="3rd Year">Gurugram</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Select Course</label>
          <select name="sbranch" class="form-control" id="branch">
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="ME">ME</option>
            <option value="CE">CE</option>
            <option value="IT">IT</option>
          </select>
        </div>
        <div class="form-group">
          <input type="file" class="file-upload-default" name="banner1">
          <div class="input-group col-xs-12">
            <input type="text" name="banner1name" class="form-control file-upload-info" disabled placeholder="Choose Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-warning text-white" type="button">Choose</button>
            </span>
          </div>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary font-weight-medium ">Add New User</button>
        </div>
      </form>
    </div>
  </div>
</div>
