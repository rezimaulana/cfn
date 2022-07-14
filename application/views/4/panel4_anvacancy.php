<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel45fo');?></h4>
                <?php echo '<h4 class="text-success">'.$this->session->flashdata("error").'</h4>'; ?>
                <?php echo '<h4 class="text-success">'.$this->session->flashdata("success").'</h4>'; ?>
                <div class="table-responsive">
                    
                    
                
                        
                           
                    
                
                        <table id="an" class="table table-striped table-bordered">
                            <thead>
                                <tr> 
                                    <th><?=$this->lang->line('panel36fo');?></th>
                                    <th><?=$this->lang->line('panel25fo');?></th>
                                    <th>Subject</th>
                                    <th>Subjek</th>
                                    <th><?=$this->lang->line('panel47fo');?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($result as $row) {?>
                                <tr>
                                <td align="center">
                                    <a class="btn btn-warning" href="<?php echo site_url('career_center/read_vacancy');?>/<?php echo $row->id_job;?>"><i class="mdi mdi-eye"></i></a><br> 
                                    <a class="btn btn-danger" href="<?php echo site_url('fojoba/eanvacancy');?>/<?php echo $row->id_job;?>"><i class="mdi mdi-tooltip-edit"></i></a><br>
                                </td>
                                        <td><?php echo $row->id_job; ?></td>
                                        <td><?=$row->j_subject_en?></td>
                                        <td><?=$row->j_subject_id?></td>
                                        <td><?php echo $row->timestamp.' '.$this->lang->line('sd').' '.$row->j_valid.' 00:00:00'; ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?=$this->lang->line('panel36fo');?></th>
                                    <th><?=$this->lang->line('panel25fo');?></th>
                                    <th>Subject</th>
                                    <th>Subjek</th>
                                    <th><?=$this->lang->line('panel47fo');?></th>
                                </tr>
                            </tfoot>
                        </table>
                    <a class="btn btn-primary" href="<?echo site_url("fojoba/nanvacancy")?>"><i class="mdi mdi-account-multiple-plus"></i>  <?=$this->lang->line('panel48fo');?></a>
                    <a class="btn btn-primary" href="<?echo site_url("fojoba/nanvacancyid")?>"><i class="mdi mdi-account-multiple-plus"></i>  <?=$this->lang->line('panel93fo');?></a>
                    <a class="btn btn-primary" href="<?echo site_url("fojoba/nanvacancyen")?>"><i class="mdi mdi-account-multiple-plus"></i>  <?=$this->lang->line('panel94fo');?></a>





                </div>
            </div>
        </div>
    </div>
</div>