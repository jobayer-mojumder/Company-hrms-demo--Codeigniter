
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Add Application</h3>
        </div>            
    </div>
            <?php echo form_open('employee/insert_application/'. $_SESSION['user_id'], 'class="form-horizontal" id="myform" role="form"'); ?>
                <div class="form-group">
                    <label for="day" class="col-sm-2 control-label">Days</label>
                    <div class="col-sm-4">
                        <input type="number" id="day" name="day" placeholder="days" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fromDate" class="col-sm-2 control-label">From</label>
                    <div class="col-sm-4">
                        <input type="Date" id="fromDate" name="fromDate" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="toDate" class="col-sm-2 control-label">To</label>
                    <div class="col-sm-4">
                        <input type="Date" id="toDate" name="toDate" class="form-control" placeholder="">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Reason</label>
                    <div class="col-sm-4">
                    <textarea id="reason" name="reason" placeholder="leave reason" class="form-control" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">Leave Type</label>
                    <div class="col-sm-4">
                        <select id="type" name="type" class="form-control" required >
                            <option value="">select</option>
                            <option value="sick">Sick</option>
                            <option value="casual">Casual</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </div>
            </form>