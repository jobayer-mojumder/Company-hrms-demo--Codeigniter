<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">View Employee</h3>
        </div>            
    </div>           
	  <table class="table table-bordered">
	    <thead>
	      <tr>
	      <th>SL</th>
	        <th>Fullname</th>
	        <th>Email</th>
	        <th>Contact</th>
	        <th>Designation</th>
	        <th>Joining Date</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php 
	    $i=1;
	    foreach ($employee as $e) { ?>  
	      <tr>
	 		<td><?php echo $i++ ?></td>
	 		<td><?php echo $e->fullname ?></td>
	 		<td><?php echo $e->email ?></td>
	 		<td><?php echo $e->contact ?></td>
	 		<td><?php echo $e->designation ?></td>
	 		<td><?php echo $e->joining_date ?></td>
	 		<td>
	 		<a href="<?php echo base_url('admin/edit_employee/'.$e->user_id) ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>

	 		<a href="<?php echo base_url('admin/delete_employee/'.$e->user_id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
	      </tr>
	    <?php } ?>
	    </tbody>
	  </table>
</div>