<div class="row">

    <div class="col-md-6">


        <div class="card">
            <form class="form-horizontal" action="<?=base_url("thaccount/cPassword_validation")?>" method="post">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel43thif');?></h4>
                    <?php echo '<h4 class="text-success">'.$this->session->flashdata("success1").'</h4>'; ?>
                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error1").'</h4>'; ?>
                    <div class="form-group row">
                        <label for="l10" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel44thif');?></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="u_pass" id="u_pass" placeholder="" value="">
                            <span class="text-danger"><?php echo form_error('u_pass'); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l11" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel45thif');?></label>
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
        <div class="card">
            <form class="form-horizontal" action="<?=base_url("thaccount/uploadRes_validation")?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel46thif');?></h4>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel47thif');?></label>
                        <div class="col-sm-9">
                            <?php foreach($result2 as $row) ?>
                            <label for="u_res"><a href="<?=base_url("uploads/user_file/").$this->session->userdata('id_user').'/'.$row->u_resume?>"><?php echo $row->u_resume; ?></a></label>
                            <input type="file" class="form-control" name="u_resume" id="u_resume">
                            <?php echo '<h4 class="text-success">'.$this->session->flashdata("success11").'</h4>'; ?>
                            <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error11").'</h4>'; ?>
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
            <form class="form-horizontal" action="<?=base_url("thaccount/uploadCur_validation")?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel48thif');?></h4>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel49thif');?></label>
                        <div class="col-sm-9">
                            <?php foreach($result2 as $row) ?>
                            <label for="u_cv"><a href="<?=base_url("uploads/user_file/").$this->session->userdata('id_user').'/'.$row->u_cv?>"><?php echo $row->u_cv; ?></a></label>
                            <input type="file" class="form-control" name="u_cv" id="u_cv">
                            <?php echo '<h4 class="text-success">'.$this->session->flashdata("success12").'</h4>'; ?>
                            <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error12").'</h4>'; ?>
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
            <form class="form-horizontal" action="<?=base_url("thaccount/uploadCer_validation")?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel50thif');?></h4>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel51thif');?></label>
                        <div class="col-sm-9">
                            <?php foreach($result2 as $row) ?>
                            <label for="u_certificate"><a href="<?=base_url("uploads/user_file/").$this->session->userdata('id_user').'/'.$row->u_certificate?>"><?php echo $row->u_certificate; ?></a></label>
                            <input type="file" class="form-control" name="u_certificate" id="u_certificate">
                            <?php echo '<h4 class="text-success">'.$this->session->flashdata("success13").'</h4>'; ?>
                            <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error13").'</h4>'; ?>
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
            <form class="form-horizontal" action="<?=base_url("thaccount/uploadQua_validation")?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel52thif');?></h4>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel53thif');?></label>
                        <div class="col-sm-9">
                            <?php foreach($result2 as $row) ?>
                            <label for="u_qualification"><a href="<?=base_url("uploads/user_file/").$this->session->userdata('id_user').'/'.$row->u_qualification?>"><?php echo $row->u_qualification; ?></a></label>
                            <input type="file" class="form-control" name="u_qualification" id="u_qualification">
                            <?php echo '<h4 class="text-success">'.$this->session->flashdata("success14").'</h4>'; ?>
                            <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error14").'</h4>'; ?>
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
            <form class="form-horizontal" action="<?=base_url("thaccount/uploadPic_validation")?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel54thif');?></h4>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel55thif');?></label>
                        <div class="col-sm-9">
                            <?php foreach($result2 as $row) ?>
                            <label for="u_pic"><a href="<?=base_url("uploads/user_file/").$this->session->userdata('id_user').'/'.$row->u_pic?>"><?php echo $row->u_pic; ?></a></label>
                            <input type="file" class="form-control" name="u_pic" id="u_pic">
                            <?php echo '<h4 class="text-success">'.$this->session->flashdata("success15").'</h4>'; ?>
                            <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error15").'</h4>'; ?>
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
            <form class="form-horizontal" action="<?=base_url("thaccount/uploadAdd_validation")?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel56thif');?></h4>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel56thif');?></label>
                        <div class="col-sm-9">
                            <?php foreach($result2 as $row) ?>
                            <label for="u_add"><a href="<?=base_url("uploads/user_file/").$this->session->userdata('id_user').'/'.$row->u_add?>"><?php echo $row->u_add; ?></a></label>
                            <input type="file" class="form-control" name="u_add" id="u_add">
                            <?php echo '<h4 class="text-success">'.$this->session->flashdata("success16").'</h4>'; ?>
                            <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error16").'</h4>'; ?>
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


    </div>



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="col-md-6">
        <div class="card">
            <?php foreach($result3 as $row) {?>
            <form class="form-horizontal" action="<?=base_url("thaccount/cUinformation_validation")?>" method="post">
                <div class="card-body">
                    <h4 class="card-title"><?=$this->lang->line('panel42thif');?></h4>
                    <?php echo '<h4 class="text-success">'.$this->session->flashdata("success2").'</h4>'; ?>
                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error2").'</h4>'; ?>
                    <div class="form-group row">
                        <label for="l1" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel22thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="" value="<?php echo $row->id_user; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l2" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel23thif');?></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="u_email" id="u_email" placeholder="" value="<?php echo $row->u_email; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l3" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel24thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_name" id="u_name" placeholder="" value="<?php echo $row->u_name; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l4" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel25thif');?></label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="u_gender" id="u_gender" placeholder="">
                                <option value="<?php echo $row->u_gender; ?>"><?php echo $row->u_gender; ?>- Gender -</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l5" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel26thif');?></label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="u_bloodtp" id="u_bloodtp" placeholder="">
                                <option value="<?php echo $row->u_bloodtp; ?>"><?php echo $row->u_bloodtp; ?>- Blood Type -</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l6" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel27thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_birthplace" id="u_birthplace" placeholder="" value="<?php echo $row->u_birthplace; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l7" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel28thif');?></label>
                        <div class="col-sm-9 input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="" name="u_birthdate" id="u_birthdate" value="<?php echo $row->u_birthdate; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l8" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel29thif');?></label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="u_nation" id="u_nation" placeholder=""">
                                <option value="<?php echo $row->u_nation; ?>"><?php echo $row->u_nation; ?> - National -</option>
                                <?php foreach($result4 as $row2) {?>
                                <option value="<?php echo $row2->c_nicename; ?>"><?php echo $row2->c_nicename; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l9" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel30thif');?></label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="u_marital" id="u_marital" placeholder=""">
                                <option value="<?php echo $row->u_marital; ?>"><?php echo $row->u_marital; ?> - Marital -</option>
                                <option value="Y">Married</option>
                                <option value="N">Single</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l10" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel31thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_1_addr" id="u_1_addr" placeholder="" value="<?php echo $row->u_1_addr; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l11" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel32thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_2_subdis" id="u_2_subdis" placeholder="" value="<?php echo $row->u_2_subdis; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l12" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel33thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_3_dist" id="u_3_dist" placeholder="" value="<?php echo $row->u_3_dist; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l13" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel34thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_4_addr" id="u_4_addr" placeholder="" value="<?php echo $row->u_4_addr; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l14" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel35thif');?></label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="c_id" id="c_id" placeholder="">
                                <option value="<?php echo $row->c_id; ?>"><?php echo $row->c_id; ?>- Country -</option>
                                <?php foreach($result4 as $row2) {?>
                                <option value="<?php echo $row2->c_id; ?>"><?php echo $row2->c_nicename; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l15" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel36thif');?></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="u_postcode" id="u_postcode" placeholder="" value="<?php echo $row->u_postcode; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l16" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel37thif');?></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="u_phone" id="u_phone" placeholder="" value="<?php echo $row->u_phone; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l17" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel38thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_last_edu" id="u_last_edu" placeholder="" value="<?php echo $row->u_last_edu; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l18" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel39thif');?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="u_le_place" id="u_le_place" placeholder="" value="<?php echo $row->u_le_place; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l19" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel40thif');?></label>
                        <div class="col-sm-9 input-group">
                            <input type="text" class="form-control myyearpicker" name="u_le_year_entry" id="u_le_year_entry" placeholder="" value="<?php echo $row->u_le_year_entry; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="l20" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel41thif');?></label>
                        <div class="col-sm-9 input-group">
                            <input type="text" class="form-control myyearpicker" name="u_le_year_gradu" id="u_le_year_gradu" placeholder="" value="<?php echo $row->u_le_year_gradu; ?>">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
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
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel14fo');?></h5>
                
                <div class="table-responsive">
                
                    <table id="uotable" class="table table-striped table-bordered">
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