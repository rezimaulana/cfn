<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel63fo');?></h5>
                <div class="table-responsive">
                    <?php if(!empty($statusMsg)){ ?>
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                    <?php } ?>
                    <form name="bulk_action_form" action="" method="post" onSubmit="return action_confirm();"/>
                        <table id="ctable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th align="center"><input type="checkbox" id="select_all" value=""/></th>        
                                    <th><?=$this->lang->line('panel67fo');?></th>
                                    <th><?=$this->lang->line('panel68fo');?></th>
                                    <th><?=$this->lang->line('panel69fo');?></th>
                                    <th><?=$this->lang->line('panel70fo');?></th>
                                    <th><?=$this->lang->line('panel71fo');?></th>
                                    <th>Email</th>
                                    <th><?=$this->lang->line('panel72fo');?></th>
                                    <th><?=$this->lang->line('panel73fo');?></th>
                                    <th><?=$this->lang->line('panel74fo');?></th>
                                    <th><?=$this->lang->line('panel75fo');?></th>
                                    <th><?=$this->lang->line('panel76fo');?></th>
                                    <th><?=$this->lang->line('panel77fo');?></th>
                                    <th><?=$this->lang->line('panel78fo');?></th>
                                    <th><?=$this->lang->line('panel79fo');?></th>
                                    <th><?=$this->lang->line('panel80fo');?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($result_action)){ foreach($result_action as $row){ ?>
                                <tr>
                                <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id_apply']; ?>"/></td> 
                                <td><?php echo $row['id_apply']; ?></td>
                                <td><?php echo $row['id_job']; ?></td>
                                <td><?php echo $row['id_user']; ?></td>
                                <td>
                                    <?php
                                    if ($this->session->userdata('lang')=='en'){  
                                        if($row['r_lvl']=='3'){echo 'Alumni';}
                                        elseif($row['r_lvl']=='5'){echo 'Public';}
                                    }
                                    elseif ($this->session->userdata('lang')=='id'){ 
                                        if($row['r_lvl']=='3'){echo 'Alumni';}
                                        elseif($row['r_lvl']=='5'){echo 'Umum';}
                                    }
                                    ?>
                                </td>
                                <td><?=$row['u_name']?></td>
                                <td><?=$row['u_email']?></td>
                                <td><?=$row['u_gender']?></td>
                                <td><?=$row['u_bloodtp']?></td>
                                <td><?=$row['u_birthplace'].' '.$row['u_birthdate']?></td>
                                <td><?=$row['u_nation']?></td>
                                <td><?=$row['u_marital']?></td>
                                <td><?=$row['u_1_addr'].' '.$row['u_2_subdis'].' '.$row['u_3_dist'].' '.$row['u_4_addr'].' '.$row['u_postcode']?></td>
                                <td><?=$row['u_phone']?></td>
                                <td><?=$row['u_last_edu'].' '.$row['u_le_place'].' '.$row['u_le_year_entry'].'-'.$row['u_le_year_gradu']?></td>
                                <td><?php echo $row['timestamp_a']; ?></td>
                                </tr>
                                <?php } }else{ ?>
                                <tr><td colspan="5">No records found.</td></tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>        
                                    <th><?=$this->lang->line('panel67fo');?></th>
                                    <th><?=$this->lang->line('panel68fo');?></th>
                                    <th><?=$this->lang->line('panel69fo');?></th>
                                    <th><?=$this->lang->line('panel70fo');?></th>
                                    <th><?=$this->lang->line('panel71fo');?></th>
                                    <th>Email</th>
                                    <th><?=$this->lang->line('panel72fo');?></th>
                                    <th><?=$this->lang->line('panel73fo');?></th>
                                    <th><?=$this->lang->line('panel74fo');?></th>
                                    <th><?=$this->lang->line('panel75fo');?></th>
                                    <th><?=$this->lang->line('panel76fo');?></th>
                                    <th><?=$this->lang->line('panel77fo');?></th>
                                    <th><?=$this->lang->line('panel78fo');?></th>
                                    <th><?=$this->lang->line('panel79fo');?></th>
                                    <th><?=$this->lang->line('panel80fo');?></th>
                                </tr>
                            </tfoot>
                        </table>
                        <input type="submit" class="btn btn-danger"    name="bulk_action_submit4" value="<?=$this->lang->line('panel90fo');?>"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>