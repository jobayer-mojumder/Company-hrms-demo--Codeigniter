<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Assign Task</h3>
        </div>            
    </div>
            <?php echo form_open('admin/assign_task', 'class="form-horizontal" id="myform" role="form"'); ?>
                <div class="form-group">
                    <label for="fullName" class="col-sm-2 control-label">Task Title</label>
                    <div class="col-sm-4">
                        <input type="text" id="taskTitle" name="taskTitle" placeholder="Task Title" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Task Details</label>
                    <div class="col-sm-4">
                        <textarea id="taskDetails" rows="5" name="taskDetails" placeholder="task details" class="form-control" required> </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="designation" class="col-sm-2 control-label">Assign Employee</label>
                    <div class="col-sm-4">
                        <select id="employee" name="employee" class="form-control" required >
                            <option value="">select</option>
                            <?foreach ($employee as $e) { ?>
                                <option value="<?php echo $e->user_id ?>"><?php echo $e->fullname ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="startDate" class="col-sm-2 control-label">Start date</label>
                    <div class="col-sm-4">
                        <input type="Date" id="startDate" name="startDate" class="form-control" placeholder="end date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="endDate" class="col-sm-2 control-label">Start date</label>
                    <div class="col-sm-4">
                        <input type="Date" id="endDate" name="endDate" class="form-control" placeholder="end date">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary btn-block">Assign task</button>
                    </div>
                </div>
            </form>