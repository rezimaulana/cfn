<div class="row">

    <div class="col-md-6">

        <div class="card">
            <form class="form-horizontal" action="<?=base_url("fiaccount/cPassword_validation")?>" method="post">
                <div class="card-body">
                    <h4 class="card-title">Change Password</h4>
                    <?php echo '<h4 class="text-success">'.$this->session->flashdata("success1").'</h4>'; ?>
                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error1").'</h4>'; ?>
                    <div class="form-group row">
                        <label for="l10" class="col-sm-3 text-right control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="u_pass" id="u_pass" placeholder="" value="">
                            <span class="text-danger"><?php echo form_error('u_pass'); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l11" class="col-sm-3 text-right control-label col-form-label">Re-enter Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="confirm_u_pass" id="confirm_u_pass" placeholder="" value="">
                            <span class="text-danger"><?php echo form_error('confirm_u_pass'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>



    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Account Activity</h5>
                
                <div class="table-responsive">
                
                    <table id="table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Log ID</th>
                                <th>IP Address</th>
                                <th>Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result1 as $row) {?>
                            <tr>
                            <td><?php echo $row->id_log; ?></td>
                            <td><?php echo $row->t_ip; ?></td>
                            <td><?php echo $row->timestamp; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Log ID</th>
                                <th>IP Address</th>
                                <th>Created</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>