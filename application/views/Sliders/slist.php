<div class="row mt-4">
	<div class="col-md-12 grid-margin stretch-card">
	  <div class="card">
	    <div class="card-body">
	      <p class="card-title mb-0">Click on the Slide Image to enlarge.</p>
	      <div class="table-responsive">
	        <table class="table table-hover">
	          <thead>
	            <tr>
	              <th>S.No.</th>
	              <th>Image</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=1; foreach($sliders as $slide): $i++;?>
	            <tr>
	              <td><?= $slide['id'];?></td>
	              <td>
	              	<?php if($slide['img'] == ''){ ?>
	              		No Slide Image Uploaded!!
	              	<?php } else{ ?>
	              	<a href="<?= $slide['img'];?>" target="_blank"><img alt="<?= $slide['id'].' Slide Image';?>" src="<?= $slide['img'];?>" class="img-fluid"></a></td>
	              	<?php } ?>
	              <td>
	              	<?php if($slide['flag'] == '0'){ ?>
	              	<a href="<?= base_url();?>index.php/Sliders/activate_slide/<?= $slide['id'];?>" class="text-success mr-3"><i class="ti-pin"></i> Activate Slide</a>
	              	<?php } else if($slide['flag'] == '1'){ ?>
	              	<a href="<?= base_url();?>index.php/Sliders/delete_slide/<?= $slide['id'];?>" class="text-danger mr-3"><i class="ti-trash"></i> Delete Slide</a>
	              	<?php }?>
	              </td>
	            </tr>
	            <?php endforeach;?>
	            <?php 
	            	if($i == 1){
	            		echo '
	            			<tr>
	            				<td colspan="3" class="text-center">
	            					No Sliders Yet Contact Technical Team!!!
	            				</td>
	            			</tr>
	            		';
	            	}
	            ?>
	          </tbody>
	        </table>
	      </div>
	    </div>
	  </div>
	</div>
</div>