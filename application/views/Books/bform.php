<div class="row w-100 auth mx-0">
  <div class="col-lg-6 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
      <h6 class="font-weight-light text-center">Fill the details of the Book  </h6>
      <form class="pt-3" action="<?= base_url();?>index.php/Books/add_new_books" enctype="multipart/form-data" method="POST">
        <div class="form-group">
          <input type="text" class="form-control form-control-sm" name="bisbn" placeholder="ISBN Number" value="<?= set_value('bisbn');?>">
          <small class="text-danger"><?= form_error('bisbn');?></small>
        </div>
        <div class="form-group">
          <input type="text" name="btitle" class="form-control form-control-sm" id="btitle" placeholder="Book Title" value="<?= set_value('btitle');?>">
          <small class="text-danger"><?= form_error('btitle');?></small>
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Select Category</label>
          <select name="bcategory" class="form-control form-control-sm" id="gender">
            <?php foreach($categories as $category):?>
              <option value="<?= $category['name'];?>"><?= $category['name'];?></option>
            <?php endforeach;?>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="bauthor" class="form-control form-control-sm" id="bauthor" placeholder="Author Name" value="<?= set_value('bauthor');?>">
          <small class="text-danger"><?= form_error('bauthor');?></small>
        </div>
        <div class="form-group">
          <input type="text" name="bpublication" class="form-control form-control-sm" id="bpublication" placeholder="Publication" value="<?= set_value('bpublication');?>">
          <small class="text-danger"><?= form_error('bpublication');?></small>
        </div>
        <div class="form-group">
          <input type="number" name="bvolume" class="form-control form-control-sm" id="spassword" placeholder="Volume" value="<?= set_value('bvolume');?>">
          <small class="text-danger"><?= form_error('bvolume');?></small>
        </div>
        <div class="form-group">
          <input type="number" name="byear" class="form-control form-control-sm" id="byear" placeholder="Year of Publication" value="<?= set_value('byear');?>">
          <small class="text-danger"><?= form_error('byear');?></small>
        </div>
        <div class="form-group">
          <input type="text" name="bedition" class="form-control form-control-sm" id="bedition" placeholder="Edition" value="<?= set_value('bedition');?>">
          <small class="text-danger"><?= form_error('bedition');?></small>
        </div>
        <div class="form-group">
          <input type="text" name="bbinding" class="form-control form-control-sm" id="bbinding" placeholder="Binding" value="<?= set_value('bbinding');?>">
          <small class="text-danger"><?= form_error('bbinding');?></small>
        </div>
        <div class="form-group">
          <input type="number" name="bpages" class="form-control form-control-sm" id="spassword" placeholder="No. of Pages" value="<?= set_value('bpages');?>">
          <small class="text-danger"><?= form_error('bpages');?></small>
        </div>
        <div class="form-group">
          <input type="text" name="bweight" class="form-control form-control-sm" id="spassword" placeholder="Weight" value="<?= set_value('bweight');?>">
          <small class="text-danger"><?= form_error('bweight');?></small>
        </div>
        <div class="form-group">
          <input type="number" name="bomrp" class="form-control form-control-sm" id="spassword" placeholder="MRP (₹)" value="<?= set_value('bomrp');?>">
          <small class="text-danger"><?= form_error('bomrp');?></small>
        </div>
        <div class="form-group">
          <input type="number" name="bmrp" class="form-control form-control-sm" id="spassword" placeholder="Price (₹)" value="<?= set_value('bmrp');?>">
          <small class="text-danger"><?= form_error('bmrp');?></small>
        </div>
        <div class="form-group">
          <input type="file" class="file-upload-default" name="cimg">
          <div class="input-group col-xs-12">
            <input type="text" name="banner1name" class="form-control file-upload-info" disabled placeholder="Choose Book Image">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-warning text-white" type="button">Choose</button>
            </span>
          </div>
          <small class="text-danger"><?= form_error('cimg');?></small>
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-block btn-primary font-weight-medium ">Add New Book</button>
        </div>
      </form>
    </div>
  </div>
</div>
