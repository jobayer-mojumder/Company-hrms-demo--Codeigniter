<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Today's all order</h3>
        </div>            
    </div>
    <div class="col-sm-6">          
	  <table class="table table-bordered" style="width: 500px;">
	    <thead>
	      <tr>
	      <th>SL</th>
	        <th>Employee Name</th>
	        <th>Order Time</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php 
	    $i=1;
	    foreach ($lunch as $l) { ?>  
	      <tr>
	 		<td><?php echo $i++ ?></td>
	 		<td><?php echo $l->fullname ?></td>
	 		<td><?php echo $l->regtime ?></td>
	      </tr>
	    <?php } ?>
	    </tbody>
	  </table>
	  </div>
	  <div class="col-sm-6">
	  	<h2>Total order : <?php echo $i-1 ?></h2>
	  </div>
</div>