<div class="row">

    <div class="col-md-6">
        <div class="card">
            <?php foreach($result2 as $row) {?>
            <form class="form-horizontal" action="<?=base_url("foaccount/cPinformation_validation")?>" method="post">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel1fo');?></h4>
                    <?php echo '<h4 class="text-success">'.$this->session->flashdata("success2").'</h4>'; ?>
                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error2").'</h4>'; ?>
                    <div class="form-group row">
                        <label for="l1" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel2fo');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="" value="<?php echo $row->id_user; ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="l2" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel3fo');?></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="u_email" id="u_email" placeholder="" value="<?php echo $row->u_email; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l3" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel4fo');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_name" id="u_name" placeholder="" value="<?php echo $row->u_name; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l4" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel5fo');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_1_addr" id="u_1_addr" placeholder="" value="<?php echo $row->u_1_addr; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l5" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel6fo');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_2_subdis" id="u_2_subdis" placeholder="" value="<?php echo $row->u_2_subdis; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l6" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel7fo');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_3_dist" id="u_3_dist" placeholder="" value="<?php echo $row->u_3_dist; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l7" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel8fo');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_4_addr" id="u_4_addr" placeholder="" value="<?php echo $row->u_4_addr; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cid" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel9fo');?></label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="c_id" id="c_id" placeholder="">
                                <option value="<?php echo $row->c_id; ?>"><?php echo $row->c_id; ?>- <?=$this->lang->line('panel9fo');?> -</option>
                                <?php foreach($resultid as $roww) {?>
                                <option value="<?php echo $roww->c_id; ?>"><?php echo $roww->c_nicename; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l8" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel10fo');?></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="u_postcode" id="u_postcode" placeholder="" value="<?php echo $row->u_postcode; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l9" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel11fo');?></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="u_phone" id="u_phone" placeholder="" value="<?php echo $row->u_phone; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l10" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel12fo');?></label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="p_desc" id="p_desc"><?php echo $row->p_desc; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l11" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel13fo');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="p_cp" id="p_cp" placeholder="" value="<?php echo $row->p_cp; ?>">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
            <?php }?>
        </div>

        <div class="card">
            <form class="form-horizontal" action="<?=base_url("foaccount/cPpicture_validation")?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel15fo');?></h4>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel16fo');?></label>
                        <div class="col-sm-9">
                            <label for="u_pic"><a href="<?=base_url("uploads/partner_file/").$this->session->userdata('id_user').'/'.$row->u_pic?>"><?php echo $row->u_pic; ?></a></label>
                            <input type="file" class="form-control" name="u_pic" id="u_pic">
                            <?php echo '<h4 class="text-success">'.$this->session->flashdata("success3").'</h4>'; ?>
                            <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error3").'</h4>'; ?>
                        </div>
                    </div> 
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type=="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="card">
            <form class="form-horizontal" action="<?=base_url("foaccount/cPassword_validation")?>" method="post">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel17fo');?></h4>
                    <?php echo '<h4 class="text-success">'.$this->session->flashdata("success1").'</h4>'; ?>
                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error1").'</h4>'; ?>
                    <div class="form-group row">
                        <label for="l10" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel18fo');?></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="u_pass" id="u_pass" placeholder="" value="">
                            <span class="text-danger"><?php echo form_error('u_pass'); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l11" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel19fo');?></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="confirm_u_pass" id="confirm_u_pass" placeholder="" value="">
                            <span class="text-danger"><?php echo form_error('confirm_u_pass'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>



    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel14fo');?></h5>
                
                <div class="table-responsive">
                
                    <table id="table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><?=$this->lang->line('panel20fo');?></th>
                                <th><?=$this->lang->line('panel21fo');?></th>
                                <th><?=$this->lang->line('panel22fo');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result1 as $row) {?>
                            <tr>
                            <td><?php echo $row->id_log; ?></td>
                            <td><?php echo $row->t_ip; ?></td>
                            <td><?php echo $row->timestamp; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th><?=$this->lang->line('panel20fo');?></th>
                                <th><?=$this->lang->line('panel21fo');?></th>
                                <th><?=$this->lang->line('panel22fo');?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>