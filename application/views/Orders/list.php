<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	      <p class="card-title mb-0">Click on the Book Title to view book's details.</p>
	      <div class="text-right">
	      </div>
	      <div class="table-responsive">
	        <table class="table table-hover" id="exportDataTable">
	          <thead>
	            <tr>
	              <th>S.No.</th>
	              <th>User ID</th>
	              <th>Transaction ID</th>
	              <th>ISBN</th>
	              <th>Book Title</th>
	              <th>Quantity</th>
	              <th>Price</th>
	              <th>Amount</th>
	              <th>Date &amp; Time</th>
	              <th>Transaction Status</th>
	              <th>Order Status</th>
	              <th>Order Action</th>
	              <th>Bill Slips</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php 
	          		$i=1;
	          		foreach($orders as $order):
	          	?>
	            <tr>
	              <td><?= $i++; ?></td>
	              <td><?= $order['uid']; ?></td>
	              <td><?= $order['txnid']; ?></td>
	              <td><?= $order['isbn']?></td>
	              <td><a data-toggle="modal" data-target="#c<?= $order['isbn'];?>"><?= $order['title'] ?></a></td>
	              <td><?= $order['qty']; ?></td>
	              <td><?= "₹ ".$order['mrp']*$order['qty']; ?></td>
	              <td><?= "₹ ".$order['price']; ?></td>
	              <td><?= $order['timedate']; ?></td>
	              <td class="text-center">
	              	<?php
	              		if($order['status'] == 'pass'){
	              	?>
	              		<label class="badge badge-success">Success</label></td>
	              	<?php
	              		}
	              		else{
	              	?>
	              		<label class="badge badge-danger">Failed</label></td>
	              	<?php } ?>
	              	<td class="text-center">
	              	<?php
	              		if($order['currentStatus'] == 'Ordered'){
	              	?>
	              		<label class="badge badge-info text-white"><?= $order['currentStatus'];?></label></td>
	              	<?php
	              		}
	              		else if($order['currentStatus'] == 'Packed'){
	              	?>
	              		<label class="badge badge-primary"><?= $order['currentStatus'];?></label></td>
	              	<?php
	              		}
	              		else if($order['currentStatus'] == 'Shipped'){
	              	?>
	              		<label class="badge text-white badge-warning"><?= $order['currentStatus'];?></label></td>
	              	<?php
	              		}
	              		else if($order['currentStatus'] == 'Delivered'){
	              	?>
	              		<label class="badge badge-success"><?= $order['currentStatus'];?></label></td>
	              	<?php
	              		}
	              		else{
	              	?>
	              		<label class="badge badge-danger"><?= $order['currentStatus'];?></label></td>
	              	<?php } ?>
	              	<td class="text-center">
	              		<?php 
	              			if($order['currentStatus'] != 'Returned' && $order['currentStatus'] != 'Cancelled'){
	              		?>
		              		<form action="<?= base_url();?>index.php/Orders/update_order_status" method="POST">
			              		<div class="form-group text-center">
		                    		<div class="input-group">
				                     <select name="orderStatus" class="form-control form-control-sm">
							             <option value="Packed"><?= 'Packed';?></option>
							             <option value="Shipped"><?= 'Shipped';?></option>
							             <option value="Delivered"><?= 'Delivered';?></option>
						          	</select>
						          	<input type="hidden" name="orderId" value="<?= $order['oi'];?>">	
						          	<input type="hidden" name="txnId" value="<?= $order['txnid'];?>">	
						          	<input type="hidden" name="userId" value="<?= $order['uid'];?>">	
			                    	<div class="input-group-append">
				                        <button class="btn btn-sm text-white btn-info" type="submit">UPDATE</button>
			                      	</div>
				                    </div>
				                </div>
			              	</form>
		              	<?php } else{ ?>
	              			<label class="badge badge-danger">No Actions</label></td>
	              		<?php } ?>
	              	</td>
	              <td><a href="<?= base_url();?>index.php/Orders/generate_bill_slip/<?= $order['oi'];?>" target="_blank" class="text-success mr-3"><i class="ti-pin"></i> Generate Bill Slip</a></td>
	            </tr>
	            <?php $this->view('Books/book_details',$order);?>
	            <?php
	            	endforeach;
	            ?>
	            
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>