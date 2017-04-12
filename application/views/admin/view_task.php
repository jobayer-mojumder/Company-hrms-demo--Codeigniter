<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">All Task</h3>
        </div>            
    </div>           
	  <table class="table table-bordered">
	    <thead>
	      <tr>
	      <th>SL</th>
	        <th>Task Title</th>
	        <th>Task details</th>
	        <th>Assigned person</th>
	        <th>Start date</th>
	        <th>End Date</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php 
	    $i=1;
	    foreach ($task as $t) { ?>  
	      <tr>
	 		<td><?php echo $i++ ?></td>
	 		<td><?php echo $t->task_title ?></td>
	 		<td><?php echo $t->task_details ?></td>
	 		<td><?php echo $t->fullname ?></td>
	 		<td><?php echo $t->start_date ?></td>
	 		<td><?php echo $t->end_date ?></td>
	 		<td>
	 		<a href="<?php echo base_url('admin/edit_task/'.$t->task_id) ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>

	 		<a href="<?php echo base_url('admin/delete_task/'.$t->task_id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
	      </tr>
	    <?php } ?>
	    </tbody>
	  </table>
</div>