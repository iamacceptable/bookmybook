<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	      
	      <!-- <div class="text-right"> 
	      		<a class="btn btn-success btn-sm" href="#">Export to Excel</a>
	      </div> -->
	      <div class="table-responsive">
	        <table class="table table-hover" id="exportDataTable">
	          <thead>
	            <tr class="text-center">
	              <th>User Id</th>
	              <th>Full Name</th>
	              <th>Email</th>
	              <th>Phone</th>
	              <th>Address</th>
	              <th>Refer Code</th>
	              <th>Status</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php foreach($users as $user):?>
	            <tr class="text-center">
	              <td><?= $user['id'];?></td>
	              <td><?= $user['name'];?></td>
	              <td><?= $user['email'];?></td>
	              <td><?= $user['mobile'];?></td>
	              <td><?= $user['address'].", ".$user['city'].", ".$user['state']." ".$user['pincode'] ;?></td>
	              <td><?= $user['refcode'];?></td>
	              <?php if($user['flag'] == '1'){ ?>
	              <td><label class="badge badge-success">Activated</label></td>
	              <td><a href="<?= base_url();?>index.php/Users/deactivate_user/<?= $user['id'];?>" class="text-danger mr-3"><i class="ti-pin"></i> Deactivate</a></td>
	          	   <?php } else{?>
	              <td><label class="badge badge-danger">Deactivated</label></td>
	              <td><a href="<?= base_url();?>index.php/Users/activate_user/<?= $user['id'];?>" class="text-success mr-3"><i class="ti-pin"></i> Activate</a></td>
	          <?php }  ?>

	            </tr>
	            <?php endforeach;?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>
