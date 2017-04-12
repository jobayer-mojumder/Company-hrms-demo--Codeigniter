
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Edit Employee</h3>
        </div>            
    </div>
            <? foreach ($employee as $e) {?>
            <?php echo form_open('admin/final_edit_employee/'.$e->user_id, 'class="form-horizontal" id="myform" role="form"'); ?>
             
                <div class="form-group">
                    <label for="fullName" class="col-sm-2 control-label">Full Name</label>
                    <div class="col-sm-4">
                        <input type="text" id="fullName" name="fullName" placeholder="Full Name" class="form-control" value="<?php echo $e->fullname ?>" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required value="<?php echo $e->email ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Contact</label>
                    <div class="col-sm-4">
                        <input type="number" id="contact" name="contact" placeholder="contact" class="form-control" required value="<?php echo $e->contact ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="joiningDate" class="col-sm-2 control-label">Joining date</label>
                    <div class="col-sm-4">
                        <input type="Date" id="joiningDate" name="joiningDate" class="form-control" placeholder="Joining date" value="<?php echo $e->joining_date ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="designation" class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-4">
                        <select id="designation" name="designation" class="form-control" required value="<?php echo $e->designation ?>">
                            <option value="">select</option>
                            <option value="CEO">CEO</option>
                            <option value="MD">MD</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Programmer">Programmer</option>
                            <option value="Content writter">Content writter</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="userType" class="col-sm-2 control-label">User Type</label>
                    <div class="col-sm-4">
                        <select id="userType" name="userType" class="form-control" required value="<?php echo $e->user_type ?>" >
                            <option value="">select</option>
                            <option value="1">Admin</option>
                            <option value="2">employee</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
            <?php } ?>