<div class="row mt-4">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	      <div class="table-responsive">
	        <table class="table table-hover">
	          <thead>
	            <tr>
	              <th>S.No.</th>
	              <th>Category Name</th>
	              <th>Books</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=1; foreach($categories as $category):?>
	            <tr>
	              <td><?= $i++;?></td>
	              <td><a target="_blank" href="<?= $category['img'];?>"><?= $category['name'];?></a></td>
	              <td><?= $category['count'];?></td>
	              <td><a href="<?= base_url();?>index.php/Books/delete_category/<?= $category['id'];?>" class="text-danger mr-3"><i class="ti-trash"></i> Delete</a></td>
	            </tr>
	            <?php endforeach;?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>