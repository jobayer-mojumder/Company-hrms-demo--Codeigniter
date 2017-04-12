<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Lunch order</h3>
        </div>            
    </div>           
 	<?php if ($num <= 0 ){ ?>
 	 	<a href="<?php echo base_url('employee/lunch_order/'.$_SESSION['user_id']) ?>"><button type="button" class="btn btn-primary">Order todays lunch</button></a>
 	 <?php }
 	 	else{ ?>
 	 		<h3> You already ordered todays lunch</h3>
 	 		<a href="<?php echo base_url('employee/delete_order/'.$_SESSION['user_id']) ?>"><button type="button" class="btn btn-danger">Delete order</button></a>
 	 	<?php } ?>
</div>