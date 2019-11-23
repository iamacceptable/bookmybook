<div class="modal fade" id="c<?= $isbn;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?= $title;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="<?= $img;?>" class="img img-fluid">
                    <hr>
                    <p><b>ISBN:</b> <?= $isbn;?></p>
                    <p><b>Title:</b> <?= $title;?></p>
                    <p><b>Author:</b> <?= $author;?></p>
                    <p><b>Publication:</b> <?= $publication;?></p>
                    <p><b>Category:</b> <?= $category;?></p>
                    <p><b>Volume:</b> <?= $volume;?></p>
                    <p><b>Year of Publication:</b> <?= $year;?></p>
                    <p><b>Edition:</b> <?= $edition;?></p>
                    <p><b>Binding:</b> <?= $binding;?></p>
                    <p><b>Total Pages:</b> <?= $pages;?></p>
                    <p><b>Total Weight:</b> <?= $weight;?></p>
                    <p><b>Price:</b> ₹<?= $mrp;?></p>
                    <p class="text-center">
                        <?php if($flag == '1'){ ?>
                            <label class="badge badge-success">Available</label>
                        <?php } else{?>
                            <label class="badge badge-danger">Not Available</label>
                        <?php }?>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>