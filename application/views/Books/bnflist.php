<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
    	  <div class="text-right"> 
	      </div>
	      <div class="table-responsive" >
	        <table class="table table-hover" id="exportDataTable">
	          <thead>
	            <tr>
	              <th>S.No.</th>
	              <th>Book Name</th>
	              <th>Author Name</th>
	              <th>Publisher</th>
	              <th>User Who Searched</th>
	              <th>Date &amp; Time</th>
	              <!-- <th>Action</th> -->
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=1; foreach($books as $book): ?>
	            <tr>
	              <td><?= $i++;?></td>
	              <td><?= $book['bookname'];?></td>
	              <td><?= $book['authorName'];?></td>
	              <td><?= $book['publisherName'];?></td>
	              <td><?= $book['uid'];?></td>
	              <td><?= $book['timedate'];?></td>
	              <td><a href="<?= base_url();?>index.php/Books/notify_user/<?= $book['uid'];?>/<?= $book['id'];?>" class="text-success"><i class="ti-share"></i> Reply</a></td>
	            </tr>
	        	<?php endforeach;?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>