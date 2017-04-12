<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">All Application</h3>
        </div>            
    </div>           
	  <table class="table table-bordered">
	    <thead>
	      <tr>
	      <th>SL</th>
	        <th>Employee</th>
	        <th>Days</th>
	        <th>Reason</th>
	        <th>From date</th>
	        <th>To date</th>
	        <th>Type</th>
	        <th>Status</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php 
	    $i=1;
	    foreach ($application as $e) { ?>  
	      <tr>
	 		<td><?php echo $i++ ?></td>
	 		<td><?php echo $e->fullname ?></td>
	 		<td><?php echo $e->days ?></td>
	 		<td><?php echo $e->reason ?></td>
	 		<td><?php echo $e->from_date ?></td>
	 		<td><?php echo $e->to_date ?></td>
	 		<td><?php echo $e->type ?></td>
	 		<td><?php if( $e->status==0 )
	 					echo "Pending";
	 				else if($e->status==1)
	 					echo "Accepted";
	 				else 
	 					echo "Declined";
	 		 ?></td>
	 		<td>
	 		<?php if ($e->status ==1){ ?>
	 		<a href="<?php echo base_url('admin/delete_application/'.$e->id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
	 		<?php }
	 			else if ($e->status ==2){ ?>

	 		<a href="<?php echo base_url('admin/accept_application/'.$e->id) ?>" class="btn btn-sm btn-success"><i class="fa fa-check-square-o"></i></a>

	 			<?php }
	 			else{ ?>
	 			<a href="<?php echo base_url('admin/accept_application/'.$e->id) ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

	 			<a href="<?php echo base_url('admin/delete_application/'.$e->id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
	 			
	 			<?php }
	 		 ?>
	 		 </td>
	      </tr>
	    <?php } ?>
	    </tbody>
	  </table>
</div>