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
	              <th>Status</th>
	              <th>Action</th>
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
	              <td>
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