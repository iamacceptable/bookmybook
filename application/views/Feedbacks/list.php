<div class="row mt-4">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	    	
	      <div class="table-responsive">
	        <table class="table table-hover" id="exportDataTable">
	          <thead>
	            <tr class="text-center">
	              <th>S.No.</th>
	              <th>User Id</th>
	              <th>Feedback</th>
	              <th>Source</th>
	              <th>Comment</th>
	              <th>Date/Time</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=1; foreach($feedbacks as $feedback):?>
	            <tr class="text-center">
	              <td><?= $i++;?></td>
	              <td><?= $feedback['userid'];?></td>
	              <td><?= number_format((float)$feedback['rating'], 1, '.', '');?> <i class="ti-star"></i></td>
	              <td><?= $feedback['source']?></td>
	              <td><?= $feedback['comment']?></td>
	              <td><?= $feedback['timendate']?></td>
	              <td><a href="#" class="text-success"><i class="ti-share"></i> Reply</a></td>
	            </tr>
	        	<?php 
	        		endforeach;
	        		if($i ==1 ){
	        	?>
	        	<tr>
	        		<td colspan="7" class="text-center">No Feedbacks Yet!!</td>
	        	</tr>
	        	<?php }?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>