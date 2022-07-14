<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('r4')?></h5>
                <div class="table-responsive">




                    <?php if(!empty($statusMsg)){ ?>
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                    <?php } ?>
                    <form name="bulk_action_form" action="" method="post" onSubmit="return action_confirm();"/>
                        <table id="mstable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="select_all" value=""/></th>        
                                    <th><?=$this->lang->line('r14')?></th>
                                    <th><?=$this->lang->line('r15')?></th>
                                    <th><?=$this->lang->line('r16')?></th>
                                    <th><?=$this->lang->line('r18')?></th>
                                    <th><?=$this->lang->line('r19')?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($result_action)){ foreach($result_action as $row){ ?>
                                <tr>
                                <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id_user']; ?>"/></td> 
                                <td><?php echo $row['id_user']; ?></td>
                                <td><?php echo $row['u_email']; ?></td>
                                <td><?php echo $row['r_lvl']; ?></td>
                                <td><?php echo $row['u_appr']; ?></td>
                                <td><?php echo $row['timestamp_d']; ?></td>
                                </tr>
                                <?php } }else{ ?>
                                <tr><td colspan="5">No records found.</td></tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>        
                                    <th><?=$this->lang->line('r14')?></th>
                                    <th><?=$this->lang->line('r15')?></th>
                                    <th><?=$this->lang->line('r16')?></th>
                                    <th><?=$this->lang->line('r18')?></th>
                                    <th><?=$this->lang->line('r19')?></th>
                                </tr>
                            </tfoot>
                        </table>
                        <input type="submit" class="btn btn-danger" name="bulk_action_submit" value="Confirm User Account"/>
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>