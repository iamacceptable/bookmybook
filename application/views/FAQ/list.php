<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	      <div class="table-responsive">
	        <table class="table table-hover">
	          <thead>
	            <tr>
	              <th>S.No.</th>
	              <th>Question</th>
	              <th>Answer</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=1; foreach($faqs as $faq):?>
	            <tr>
	              <td><?= $i++; ?></td>
	              <td><?= $faq['ques'];?></td>
	              <td><?= $faq['ans'];?></td>
	              <td><a href="#" class="text-danger mr-3"><i class="ti-trash"></i> Delete</a><a href="#" class="text-warning"><i class="ti-pencil-alt"></i> Edit</a></td>
	            </tr>
	            <?php endforeach; ?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>