<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel23fo');?></h5>
                <div class="table-responsive">
                    
                    
                
                        
                           
                    
                    
                    <form name="action_form" action="" method="post"/>
                        <table id="udata" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><?=$this->lang->line('r20');?></th> 
                                    <th><?=$this->lang->line('panel24fo');?></th>
                                    <th><?=$this->lang->line('panel25fo');?></th>
                                    <th><?=$this->lang->line('panel26fo');?></th>
                                    <th><?=$this->lang->line('panel27fo');?></th>
                                    <th><?=$this->lang->line('panel28fo');?></th>
                                    <th><?=$this->lang->line('panel29fo');?></th>
                                    <th><?=$this->lang->line('panel30fo');?></th>
                                    <th><?=$this->lang->line('panel31fo');?></th>
                                    <th><?=$this->lang->line('panel32fo');?></th>
                                    <th><?=$this->lang->line('panel33fo');?></th>
                                    <th><?=$this->lang->line('panel34fo');?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($result as $row) {?>
                                <tr>
                                <td><?php echo $row->id_user_p; ?></td>
                                <td><?php echo $row->id_apply; ?></td>
                                <td><?php echo $row->id_job; ?></td>
                                <td><?php echo $row->id_user; ?></td>
                                <td>
                                    <?php
                                    if ($this->session->userdata('lang')=='en'){ 
                                        if($row->r_lvl=='3'){echo 'Alumni-';}
                                        elseif($row->r_lvl=='5'){echo 'Public-';}
                                        if    ($row->state_1=='N'&&$row->state_2='N'){echo 'Applicant-';}
                                        elseif($row->state_1=='Y'&&$row->state_2='N'){echo 'Selection-';}
                                        elseif($row->state_1=='Y'&&$row->state_2='Y'){echo 'Accepted-';}
                                        elseif($row->state_1=='Q'&&$row->state_2='S'){echo 'Employee-';}
                                        elseif($row->state_1=='S'&&$row->state_2='Q'){echo 'Not Employee-';}
                                        elseif($row->state_1=='S'&&$row->state_2='S'){echo 'Fail Selection-';}
                                        elseif($row->state_1=='Q'&&$row->state_2='Q'){echo 'Not Qualified-';}
                                        if($row->state_f=='Y'){echo 'Granted';}
                                        elseif($row->state_f=='N'){echo 'Revoked';}
                                    }
                                    elseif ($this->session->userdata('lang')=='id'){ 
                                        if($row->r_lvl=='3'){echo 'Alumni-';}
                                        elseif($row->r_lvl=='5'){echo 'Umum-';}
                                        if    ($row->state_1=='N'&&$row->state_2='N'){echo 'Peserta-';}
                                        elseif($row->state_1=='Y'&&$row->state_2='N'){echo 'Seleksi-';}
                                        elseif($row->state_1=='Y'&&$row->state_2='Y'){echo 'Penerimaan-';}
                                        elseif($row->state_1=='Q'&&$row->state_2='S'){echo 'Karyawan-';}
                                        elseif($row->state_1=='S'&&$row->state_2='Q'){echo 'Bukan Karyawan-';}
                                        elseif($row->state_1=='S'&&$row->state_2='S'){echo 'Gagal Seleksi-';}
                                        elseif($row->state_1=='Q'&&$row->state_2='Q'){echo 'Tidak Berkualifikasi-';}
                                        if($row->state_f=='Y'){echo 'YA';}
                                        elseif($row->state_f=='N'){echo 'TIDAK';}
                                    }
                                    ?>
                                </td>
                                <td><?=$row->u_name?></td>
                                <td><?=$row->u_birthplace.' '.$row->u_birthdate?></td>
                                <td><?=$row->u_nation.'-'.$row->u_gender.'-'.$row->u_bloodtp.'-'.$row->u_marital?></td>
                                <td><?=$row->u_1_addr.' '.$row->u_2_subdis.' '.$row->u_3_dist.' '.$row->u_4_addr.' '.$row->u_postcode?></td>
                                <td><?=$row->u_phone?></td>
                                <td><?=$row->u_last_edu.' '.$row->u_le_place.' '.$row->u_le_year_entry.'-'.$row->u_le_year_gradu?></td>
                                <td><?php echo $row->timestamp_a; ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?=$this->lang->line('r20');?></th> 
                                    <th><?=$this->lang->line('panel24fo');?></th>
                                    <th><?=$this->lang->line('panel25fo');?></th>
                                    <th><?=$this->lang->line('panel26fo');?></th>
                                    <th><?=$this->lang->line('panel27fo');?></th>
                                    <th><?=$this->lang->line('panel28fo');?></th>
                                    <th><?=$this->lang->line('panel29fo');?></th>
                                    <th><?=$this->lang->line('panel30fo');?></th>
                                    <th><?=$this->lang->line('panel31fo');?></th>
                                    <th><?=$this->lang->line('panel32fo');?></th>
                                    <th><?=$this->lang->line('panel33fo');?></th>
                                    <th><?=$this->lang->line('panel34fo');?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>