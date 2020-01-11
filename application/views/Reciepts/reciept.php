<?php
	$this->view('main_layout/header');
?>
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-12">
					<span class="text-left"><img src="<?= base_url();?>assets/images/logo.png" width="20%"></span>
					<hr>
					<h4 class="font-weight-light text-center">INVOICE DETAILS</h4>
				</div>
			</div>	
			<div class="row">
				<div class="col-6 text-left">
					<p><b>BILLED TO:</b></p>
					<p class="font-weight-light">
						<?= $user->name;?><br>
						<?= $user->address?>, New Delhi, <?= $user->pincode;?><br>
						Phone: <?= $user->mobile;?>
					</p>
				</div>
				<div class="col-6 text-right">
					<p><b>PAYMENT METHOD:</b></p>
					<p class="font-weight-light">
						<?php 
							if($txn->wallet == true){
								echo 'Wallet';
							}
							else
								echo 'Payment through Debit/Credit Card/Net Banking/UPI';
						?><br>
						Email: <?= $user->email;?> 
					</p>
				</div>
				<div class="col-12"><hr>
					<p><b>ORDER DETAILS:</b></p>
				</div>
				<div class="col-6">
					<p class="font-weight-light">
						<b>Order ID: </b><?= $txn->id;?><br>
						<b>Transaction ID: </b><?= $txn->txnid;?>
					</p>
				</div>
				<div class="col-6 text-right">
					<p class="font-weight-light">
						<b>Date: </b><?= date('Y/m/d', strtotime($txn->timedate));?><br>
						<b>Time: </b><?= date('h:i:s', strtotime($txn->timedate));?>
					</p>
				</div>
				<div class="col-12">
					<div class="table-responsive">
				        <table class="table table-bordered">
				          	<thead>
				            	<tr>
				            		<th style="width: 50%">Item</th>
				            		<th style="width: 16.66%">Price</th>
				            		<th style="width: 16.66%">Quantity</th>
				            		<th style="width: 16.66%">Total</th>
				            	</tr>
				            </thead>
				            <tbody class="font-weight-light">
				            	<tr>
				            		<td>
				            			<?= $book->isbn; ?><br>
				            			<?= $book->title; ?><br>
				            			<?= $book->author.", ".$book->publication; ?><br>
				            			(<?= $book->category?>)
				            		</td>
				            		<td><?=  "₹ ".number_format((float)$book->mrp, 2, '.', ''); ?></td>
				            		<td><?= $txn->qty;?></td>
				            		<td><?= "₹ ".number_format((float)($book->mrp*$txn->qty), 2, '.', ''); ?></td>
				            	</tr>
				            	<tr>
				            		<td colspan="4"></td>
				            	</tr>
				            	<tr>
				            		<td><b class="font-weight-bold">Total Quantity: </b><?= $txn->qty;?></td>
				            		<td></td>
				            		<td class="text-right"><b class="font-weight-bold">Total:</b></td>
				            		<td><?= "₹ ".number_format((float)($book->mrp*$txn->qty), 2, '.', ''); ?></td>
				            	</tr>
				            	
				            </tbody>
						</table>
					</div>
				</div>
			</div>		
		</div>
		<script type="text/javascript">
			var isClosed = false;
			window.print();
			window.onfocus = function() {
			if(isClosed) { // Work around IE11 calling window.close twice
			  return;
			}
			window.close();
			isClosed = true;
			}
		</script>
<?php
	$this->view('main_layout/footer');
?>