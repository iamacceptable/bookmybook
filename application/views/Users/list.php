<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	      <p class="card-title mb-0">Click on the User Name to View his/her display picture.</p>
	      <div class="text-right"> 
	      		<a class="btn btn-success btn-sm" href="#">Export to Excel</a>
	      </div>
	      <div class="table-responsive">
	        <table class="table table-hover">
	          <thead>
	            <tr>
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
	            <tr>
	              <td><?= $user['id'];?></td>
	              <td><?= $user['name'];?></td>
	              <td><?= $user['email'];?></td>
	              <td><?= $user['mobile'];?></td>
	              <td><?= $user['address'].", ".$user['city'].", ".$user['state']." ".$user['pincode'] ;?></td>
	              <td><?= $user['refcode'];?></td>
	              <?php if($user['flag'] == '1'){ ?>
	              <td><label class="badge badge-success">Activated</label></td>
	              <td><a href="#" class="text-danger mr-3"><i class="ti-pin"></i> Deactivate</a></td>
	          	   <?php } else{?>
	              <td><label class="badge badge-danger">Deactivated</label></td>
	              <td><a href="#" class="text-success mr-3"><i class="ti-pin"></i> Activate</a></td>
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