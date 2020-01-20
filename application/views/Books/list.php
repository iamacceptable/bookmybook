<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	      <p class="card-title mb-0">Click on the Book Title to view book's details.</p>
	      <div class="table-responsive">
	        <table class="table table-hover" id="exportDataTable">
	          <thead>
	            <tr class="text-center">
	              <th>S.No.</th>
	              <th>ISBN Number</th>
	              <th>Book Title</th>
	              <th>Publication</th>
	              <th>Status</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=1; foreach($books as $book):?>
	            <tr class="text-center">
	              <td><?= $i++; ?></td>
	              <td><?= $book['isbn'] ?></td>
	              <td><a data-toggle="modal" data-target="#c<?= $book['isbn'];?>"><?= $book['title'] ?></a></td>
	              <td><?= $book['publication'] ?></td>
	              	<?php if($book['flag'] == 'Available'){ ?>
	              		<td>
	              			<label class="badge badge-success">Available</label>
	              		</td>
	              		<td>
	              			<a href="<?= base_url();?>index.php/Books/book_not_available/<?= $book['id'];?>" class="text-danger"><i class="ti-pin"></i> Not Available</a>
	              		</td>		
	              	<?php } else{?>
	              		<td>
	              			<label class="badge badge-danger">Not Available</label>
	              		</td>
	              		<td>
	              			<a href="<?= base_url();?>index.php/Books/book_available/<?= $book['id'];?>" class="text-success"><i class="ti-pin"></i> Available</a>
	              		</td>
	              	<?php }?>
	            </tr>
	              <?php $this->view('Books/book_details',$book);?>
	            <?php
	            	endforeach;
	            	if($i == 1){
	            ?>
	            <tr>
	              <td class="text-center" colspan="6">No Books Yet!</td>
	            </tr>
	        	<?php }?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>