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
                                    <th><?=$this->lang->line('panel26fo');?></th>
                                    <th><?=$this->lang->line('panel37fo');?></th>
                                    <th><?=$this->lang->line('panel38fo');?></th>
                                    <th><?=$this->lang->line('panel39fo');?></th>
                                    <th><?=$this->lang->line('panel40fo');?></th>
                                    <th><?=$this->lang->line('panel41fo');?></th>
                                    <th><?=$this->lang->line('panel42fo');?></th>
                                    <th><?=$this->lang->line('panel43fo');?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($result as $row) {?>
                                <?php $path=base_url("uploads/user_file/").$row->id_file; ?>
                                <tr>
                                <td align="center">
                                    <a class="btn btn-info" href="<?php echo base_url('fojobv/downloadZIP');?>/<?php echo $row->id_file;?>">Download</a>
                                </td>
                                <td><?php echo $row->id_user; ?></td>
                                <td>
                                    <?php 
                                    if($row->r_lvl=='3'){echo 'Alumni';}
                                    elseif($row->r_lvl=='5'){echo 'Public';}
                                    ?>
                                </td>
                                
                                <td><a href="<?=$path.'/'.$row->u_resume?>"><?php echo $row->u_resume; ?></a></td>
                                <td><a href="<?=$path.'/'.$row->u_cv?>"><?php echo $row->u_cv; ?></a></td>
                                <td><a href="<?=$path.'/'.$row->u_certificate?>"><?php echo $row->u_certificate; ?></a></td>
                                <td><a href="<?=$path.'/'.$row->u_qualification?>"><?php echo $row->u_qualification; ?></a></td>
                                <td><a href="<?=$path.'/'.$row->u_pic?>"><?php echo $row->u_pic; ?></a></td>
                                <td><a href="<?=$path.'/'.$row->u_add?>"><?php echo $row->u_add; ?></a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><?=$this->lang->line('panel36fo');?></th>  
                                    <th><?=$this->lang->line('panel26fo');?></th>
                                    <th><?=$this->lang->line('panel37fo');?></th>
                                    <th><?=$this->lang->line('panel38fo');?></th>
                                    <th><?=$this->lang->line('panel39fo');?></th>
                                    <th><?=$this->lang->line('panel40fo');?></th>
                                    <th><?=$this->lang->line('panel41fo');?></th>
                                    <th><?=$this->lang->line('panel42fo');?></th>
                                    <th><?=$this->lang->line('panel43fo');?></th>
                                </tr>
                            </tfoot>
                        </table>
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>