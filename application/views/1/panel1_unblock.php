<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Unblock User</h5>
                <div class="table-responsive">




                    <?php if(!empty($statusMsg)){ ?>
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                    <?php } ?>
                    <form name="bulk_action_form" action="" method="post" onSubmit="return action_confirm();"/>
                        <table id="mstable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select_all" value=""/></th>        
                                    <th>UserID</th>
                                    <th>EmailAddress</th>
                                    <th>RoleLevel</th>
                                    <th>UserBlock</th>
                                    <th>Timestamp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($result_action)){ foreach($result_action as $row){ ?>
                                <tr>
                                <td><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id_user']; ?>"/></td> 
                                <td><?php echo $row['id_user']; ?></td>
                                <td><?php echo $row['u_email']; ?></td>
                                <td><?php echo $row['r_lvl']; ?></td>
                                <td><?php echo $row['u_block']; ?></td>
                                <td><?php echo $row['timestamp_d']; ?></td>
                                </tr>
                                <?php } }else{ ?>
                                <tr><td colspan="5">No records found.</td></tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>        
                                    <th>UserID</th>
                                    <th>EmailAddress</th>
                                    <th>RoleLevel</th>
                                    <th>UserBlock</th>
                                    <th>Timestamp</th>
                                </tr>
                            </tfoot>
                        </table>
                        <input type="submit" class="btn btn-danger" name="bulk_action_submit" value="UNBLOCK"/>
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>