

            <!-- Begin Page Content -->    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>


         
        <div class="row">
        	<div class="col-lg-6">
             <div class="card">
              <div class="card-body">
        

		<?= form_error('menus','<div class="alert alert-danger" role="alert">','
					</div>') ?> 

		<?=$this->session->flashdata('message'); ?>

     




  <?php  if(empty($menu)) :?>
            <div class="alert alert-danger" role="alert">
                Data Is not Found!
            </div>
          <?php endif; ?>


        	<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"> Add New Menu</a>

           <div class="row mt-3">
              <div class="col">
                  <form method="post">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search Data Menu" name="keyword">
                      <div class="input-group-append">
                      <button class="btn btn-primary" type="submit" >search</button>
                    </div>
                  </form>
              </div>

      </div>

      











			 <table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>

			      <th scope="col">Menu</th>
			      <th scope="col">Action</th>
			      <!--  -->
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i=1; ?>

			  	<?php foreach ($menu as $m ) :  ?>
			    <tr>

			      <th scope="row"><?= $i; ?></th>

            
			      <td><?= $m['menu'];?></td>
			      <td>

            
			     	<a href="<?=base_url();?>Menu/edit12/<?=$m['id']; ?>" class="badge badge-success">edit</a> 
			     	<a href="<?=base_url();?>Menu/deleteMenu/<?=$m['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a> 
			      		
			      </td>
			    </tr>
			    <?php $i++; ?>
			<?php endforeach; ?>


    
				  </tbody>
				</table>
        	</div>

        </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- modal -->




<!-- cara di bottstrap Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('menu'); ?>" method="post" >
      <div class="modal-body">
      <div class="form-group">
	    <input type="text" class="form-control" id="menus" name="menus" placeholder="Menu name">
  		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
</div>

