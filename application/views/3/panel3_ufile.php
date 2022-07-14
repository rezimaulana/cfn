<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel35fo');?></h5>
                <div class="table-responsive">
                    
                    
                
                        
                           
                    
                    
                    
                    <form name="action_form" action="" method="post"/>
                    <?php 
                        if ($this->session->flashdata("success")==NULL){
                        echo '';
                        }
                        else{
                            echo '<div class="alert alert-success">'.$this->session->flashdata("success").'</div>';
                        }
                    ?>
                        <table id="ufile" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><?=$this->lang->line('panel36fo');?></th> 
                                    <th><?=$this->lang->line('panel1thif');?></th>  
                                    <th><?=$this->lang->line('panel67fo');?></th>
                                    <th><?=$this->lang->line('panel4fo');?></th>
                                    <th><?=$this->lang->line('panel4thif');?></th>
                                    <th><?=$this->lang->line('panel3thif');?></th>
                                    <th><?=$this->lang->line('panel44fo');?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($result as $row) {?>
                                <?php foreach($result2 as $row2) {?>
                                <tr>
                                <td align="center">
                                        <?php
                                        if($row->state_f=='Y'){
                                            $state_fi='N';
                                        }
                                        elseif($row->state_f=='N'){
                                            $state_fi='Y';
                                        }
                                        ?>
                                    <a class="btn btn-danger" href="<?php echo base_url('thjobv/change_ufile');?>/<?php echo $row->id_apply;?>/<?php echo $state_fi;?>"><?=$this->lang->line('panel2thif');?></a>
                                </td>
                                <td>
                                    <?php
                                    if ($this->session->userdata('lang')=='en'){
                                        if($row->state_f=='Y'){
                                            echo 'Granted';
                                        }
                                        elseif($row->state_f=='N'){
                                            echo 'Revoked';
                                        }
                                    }
                                    elseif ($this->session->userdata('lang')=='id'){
                                        if($row->state_f=='Y'){
                                            echo 'Diizinkan';
                                        }
                                        elseif($row->state_f=='N'){
                                            echo 'Tidak';
                                        }
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row->id_apply; ?></td>
                                <td><?php echo $row2->u_name; ?></td>
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
                                    <th><?=$this->lang->line('panel1thif');?></th>  
                                    <th><?=$this->lang->line('panel67fo');?></th>
                                    <th><?=$this->lang->line('panel4fo');?></th>
                                    <th><?=$this->lang->line('panel4thif');?></th>
                                    <th><?=$this->lang->line('panel3thif');?></th>
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