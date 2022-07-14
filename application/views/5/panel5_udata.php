<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel23fo');?></h5>
                <div class="table-responsive">
                    
                    
                
                        
                           
                    
                    
                    <form name="action_form" action="" method="post"/>
                        <table id="ufile" class="table table-striped table-bordered">
                            <thead>
                                <tr> 
                                    <th><?=$this->lang->line('panel36fo');?></th> 
                                    <th><?=$this->lang->line('panel67fo');?></th>
                                    <th><?=$this->lang->line('panel4fo');?></th>
                                    <th><?=$this->lang->line('panel27fo');?></th>
                                    <th><?=$this->lang->line('panel4thif');?></th>
                                    <th><?=$this->lang->line('panel3thif');?></th>
                                    <th><?=$this->lang->line('panel34fo');?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($result as $row) {?>
                                <?php foreach($result2 as $row2) {?>
                                <tr>
                                <td><a class="btn btn-info" href="<?php echo base_url('ifjobv/print_item');?>/<?php echo $row->id_apply;?>">PRINT</a></td>
                                <td><?php echo $row->id_apply; ?></td>
                                <td><?php echo $row2->u_name; ?></td>
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
                                <?php 
                                if ($this->session->userdata('lang')=='en'){
                                    ?>
                                    <td><?php echo $row->j_subject_en; ?>/</td>
                                    <td><?php echo $row->j_type_en; ?>/<?php echo $row->j_industry_en; ?>/<?php echo $row->j_function_en; ?></td>
                                    <?php
                                }
                                elseif ($this->session->userdata('lang')=='id'){
                                    ?>
                                    <td><?php echo $row->j_subject_id; ?></td>
                                    <td><?php echo $row->j_type_id; ?>/<?php echo $row->j_industry_id; ?>/<?php echo $row->j_function_id; ?></td>
                                    <?php
                                }
                                ?>
                                <td><?php echo $row->timestamp_a; ?></td>
                                </tr>
                                <?php }}?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?=$this->lang->line('panel36fo');?></th> 
                                    <th><?=$this->lang->line('panel67fo');?></th>
                                    <th><?=$this->lang->line('panel4fo');?></th>
                                    <th><?=$this->lang->line('panel27fo');?></th>
                                    <th><?=$this->lang->line('panel4thif');?></th>
                                    <th><?=$this->lang->line('panel3thif');?></th>
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