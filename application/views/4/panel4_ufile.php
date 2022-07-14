<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel35fo');?></h5>
                <div class="table-responsive">
                    
                    
                
                        
                           
                    
                    
                    <form name="action_form" action="" method="post"/>
                        <table id="ufile" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><?=$this->lang->line('panel36fo');?></th>   
                                    <th><?=$this->lang->line('panel24fo');?></th>
                                    <th><?=$this->lang->line('panel25fo');?></th>
                                    <th><?=$this->lang->line('panel26fo');?></th>
                                    <th><?=$this->lang->line('panel37fo');?></th>
                                    <th><?=$this->lang->line('panel38fo');?></th>
                                    <th><?=$this->lang->line('panel39fo');?></th>
                                    <th><?=$this->lang->line('panel40fo');?></th>
                                    <th><?=$this->lang->line('panel41fo');?></th>
                                    <th><?=$this->lang->line('panel42fo');?></th>
                                    <th><?=$this->lang->line('panel43fo');?></th>
                                    <th><?=$this->lang->line('panel44fo');?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($result as $row) {?>
                                <?php $path=base_url("uploads/user_file/").$row->id_file; ?>
                                <tr>
                                <td align="center">
                                <a class="btn btn-info" href="<?php echo base_url('fojobv/downloadZIP');?>/<?php echo $row->id_file;?>/<?php echo $row->jf1;?>/<?php echo $row->jf2;?>/<?php echo $row->jf3;?>/<?php echo $row->jf4;?>/<?php echo $row->jf5;?>/<?php echo $row->jf6;?>">Download</a>
                                </td>
                                <td><?php echo $row->id_apply; ?></td>
                                <td><?php echo $row->id_job; ?></td>
                                <td><?php echo $row->id_user; ?></td>
                                <td>
                                    <?php 
                                    if($row->r_lvl=='3'){echo 'Alumni';}
                                    elseif($row->r_lvl=='5'){echo 'Public';}
                                    ?>
                                </td>
                                <td><a href="<?php if ($row->jf1=='Y'){echo $path.'/'.$row->u_resume;}else{}?>"><?php if ($row->jf1=='Y'){echo $row->u_resume;}else{}?></a></td>
                                <td><a href="<?php if ($row->jf2=='Y'){echo $path.'/'.$row->u_cv;}else{}?>"><?php if ($row->jf2=='Y'){echo $row->u_cv;}else{}?></a></td>
                                <td><a href="<?php if ($row->jf3=='Y'){echo $path.'/'.$row->u_certificate;}else{}?>"><?php if ($row->jf3=='Y'){echo $row->u_certificate;}else{}?></a></td>
                                <td><a href="<?php if ($row->jf4=='Y'){echo $path.'/'.$row->u_qualification;}else{}?>"><?php if ($row->jf4=='Y'){$row->u_qualification;}else{}?></a></td>
                                <td><a href="<?php if ($row->jf5=='Y'){echo $path.'/'.$row->u_pic;}else{}?>"><?php if ($row->jf5=='Y'){echo $row->u_pic;}else{}?></a></td>
                                <td><a href="<?php if ($row->jf6=='Y'){echo $path.'/'.$row->u_add;}else{}?>"><?php if ($row->jf6=='Y'){echo $row->u_add;}else{}?></a></td>
                                <td><?php echo $row->timestamp_a; ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?=$this->lang->line('panel36fo');?></th>   
                                    <th><?=$this->lang->line('panel24fo');?></th>
                                    <th><?=$this->lang->line('panel25fo');?></th>
                                    <th><?=$this->lang->line('panel26fo');?></th>
                                    <th><?=$this->lang->line('panel37fo');?></th>
                                    <th><?=$this->lang->line('panel38fo');?></th>
                                    <th><?=$this->lang->line('panel39fo');?></th>
                                    <th><?=$this->lang->line('panel40fo');?></th>
                                    <th><?=$this->lang->line('panel41fo');?></th>
                                    <th><?=$this->lang->line('panel42fo');?></th>
                                    <th><?=$this->lang->line('panel43fo');?></th>
                                    <th><?=$this->lang->line('panel44fo');?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>