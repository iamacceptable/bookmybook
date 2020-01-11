<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	    	<div class="text-right">
	      	</div>
	      <div class="table-responsive">
	        <table class="table table-hover">
	          <thead>
	            <tr>
	              <th>S.No.</th>
	              <th>User Id</th>
	              <th>User Name</th>
	              <th>Wallet Balance</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php
	          		$i=1;
	          		foreach($wallets as $wallet):
	          	?>
	            <tr>
	              <td><?= $i++;?></td>
	              <td><?= $wallet['id']; ?></td>
	              <td><?= $wallet['name']; ?></td>
	              <td><?= "₹ ".$wallet['wallet'];?></td>
	              <td style="padding-bottom: 0px;">
	              	<form action="<?= base_url();?>index.php/Wallet/update_wallet/<?= $wallet['id']?>" method="POST">
	              		<div class="form-group">
                    		<div class="input-group">
		                      <input type="text" class="form-control" name="amount" placeholder="Amount(₹)" aria-label="Amount">
		                      <div class="input-group-append">
		                        <button class="btn btn-sm btn-success" type="submit">Add Money</button>
		                      </div>
		                    </div>
		                </div>
	              	</form>
	              </td>
	            </tr>
	            <?php
	            	endforeach;
	            	if($i == 1){
	            ?>
	            <tr>
	            	<td colspan="5" class="text-center">No Users Wallet!!</td>
	            </tr>
	        	<?php }?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>