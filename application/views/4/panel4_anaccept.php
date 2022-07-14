<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel58fo');?></h4>
                <?php echo '<h4 class="text-success">'.$this->session->flashdata("error").'</h4>'; ?>
                <?php echo '<h4 class="text-success">'.$this->session->flashdata("success").'</h4>'; ?>
                <div class="table-responsive">
                    <table id="an" class="table table-striped table-bordered">
                        <thead>
                            <tr> 
                                <th><?=$this->lang->line('panel36fo');?></th>
                                <th><?=$this->lang->line('panel25fo');?></th>
                                <th><?=$this->lang->line('panel53fo');?></th>
                                <th>Subject</th>
                                <th>Subjek</th>
                                <th><?=$this->lang->line('panel55fo');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $row) {?>
                            <tr>
                            <td align="center">
                                <a class="btn btn-warning" href="<?php echo site_url('career_center/read_announcement');?>/<?php echo $row->id_pt;?>"><i class="mdi mdi-eye"></i></a><br> 
                                <a class="btn btn-info" href="<?php echo site_url('fojoba/eanaccept');?>/<?php echo $row->id_pt;?>"><i class="mdi mdi-tooltip-edit"></i></a><br>
                                <a class="btn btn-danger" href="<?php echo site_url('fojoba/danaccept');?>/<?php echo $row->id_pt;?>"><i class="mdi mdi-delete"></i></a><br>
                            </td>
                            <td><?php echo $row->id_job; ?></td>
                            <td><?php echo $row->id_pt; ?></td>
                            <td><?php echo $row->pt_subject_en ?></td>
                            <td><?php echo $row->pt_subject_id ?></td>
                            <td><?php echo $row->timestamp_b; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th><?=$this->lang->line('panel36fo');?></th>
                                <th><?=$this->lang->line('panel25fo');?></th>
                                <th><?=$this->lang->line('panel53fo');?></th>
                                <th>Subject</th>
                                <th>Subjek</th>
                                <th><?=$this->lang->line('panel55fo');?></th>
                            </tr>
                        </tfoot>
                    </table>
                    <a class="btn btn-primary" href="<?echo site_url("fojoba/nanaccept")?>"><i class="mdi mdi-account-multiple-plus"></i>  <?=$this->lang->line('panel57fo');?></a>
                    <a class="btn btn-primary" href="<?echo site_url("fojoba/nanacceptid")?>"><i class="mdi mdi-account-multiple-plus"></i>  <?=$this->lang->line('panel95fo');?></a>
                    <a class="btn btn-primary" href="<?echo site_url("fojoba/nanaccepten")?>"><i class="mdi mdi-account-multiple-plus"></i>  <?=$this->lang->line('panel96fo');?></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>