<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	    	<div class="text-right"> 
	      	</div>
	      <div class="table-responsive">
	        <table class="table table-hover" id="exportDataTable">
	          <thead>
	            <tr>
	              <th>S.No.</th>
	              <th>Refer ID</th>
	              <th>Reffered User ID</th>
	              <th>Reffered User Name</th>
	              <th>Date &amp; Time</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php
	          		$i=1;
	          		foreach($refers as $refer):
	          	?>
	            <tr>
	              <td><?= $i++;?></td>
	              <td><?= $refer['referCode'];?></td>
	              <td><?= $refer['rfreid'];?></td>
	              <td><?= $refer['name'];?></td>
	              <td><?= $refer['time']?></td>
	            </tr>
	            <?php
	            	endforeach;
	            	if($i == 1){
	            ?>
	            <tr>
	            	<td colspan="5" class="text-center">No Refers till now!!!</td>
	            </tr>
	            <?php }	?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>