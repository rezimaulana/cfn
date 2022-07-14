<?php foreach($result as $row) {?>
<form class="form-horizontal" action="<?php echo site_url('fojoba/veanvacancy');?>/<?php echo $row->id_job;?>" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6">
        <div class="card">              
            <div class="card-body">
                <h4 class="card-title">English</h4>
                <div class="form-group row">
                    <label for="j_subject_en" class="col-sm-3 text-right control-label col-form-label">Subject *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_subject_en" id="j_subject_en" placeholder="" value="<?php echo $row->j_subject_en; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_type_en" class="col-sm-3 text-right control-label col-form-label">Job Type *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_type_en" id="j_type_en" placeholder="" value="<?php echo $row->j_type_en; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_industry_en" class="col-sm-3 text-right control-label col-form-label">Job Industry *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_industry_en" id="j_industry_en" placeholder="" value="<?php echo $row->j_industry_en; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_function_en" class="col-sm-3 text-right control-label col-form-label">Job Function *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_function_en" id="j_function_en" placeholder="" value="<?php echo $row->j_function_en; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_experience_en" class="col-sm-3 text-right control-label col-form-label">Experience *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_experience_en" id="j_experience_en" placeholder="" value="<?php echo $row->j_experience_en; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_education_en" class="col-sm-3 text-right control-label col-form-label">Education *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_education_en" id="j_education_en" placeholder="" value="<?php echo $row->j_education_en; ?>" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">              
            <div class="card-body">
                <h4 class="card-title">Bahasa Indonesia</h4>
                <div class="form-group row">
                    <label for="j_subject_id" class="col-sm-3 text-right control-label col-form-label">Subjek *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_subject_id" id="j_subject_id" placeholder="" value="<?php echo $row->j_subject_id; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_type_id" class="col-sm-3 text-right control-label col-form-label">Jenis Pekerjaan *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_type_id" id="j_type_id" placeholder="" value="<?php echo $row->j_type_id ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_industry_id" class="col-sm-3 text-right control-label col-form-label">Industri Kerja *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_industry_id" id="j_industry_id" placeholder="" value="<?php echo $row->j_industry_id; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_function_id" class="col-sm-3 text-right control-label col-form-label">Bekerja Sebagai *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_function_id" id="j_function_id" placeholder="" value="<?php echo $row->j_function_id; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_experience_id" class="col-sm-3 text-right control-label col-form-label">Pengalaman *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_experience_id" id="j_experience_id" placeholder="" value="<?php echo $row->j_experience_id; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_education_id" class="col-sm-3 text-right control-label col-form-label">Pendidikan Terakhir *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_education_id" id="j_education_id" placeholder="" value="<?php echo $row->j_education_id; ?>" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Description *</h4>
                <textarea class="form-control" name="j_desc_en" id="j_desc_en"><?php echo $row->j_desc_en; ?></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Requirement *</h4>
                <textarea class="form-control" name="j_requirement_en" id="j_requirement_en"><?php echo $row->j_requirement_en; ?></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Deskripsi *</h4>
                <textarea class="form-control" name="j_desc_id" id="j_desc_id"><?php echo $row->j_desc_id; ?></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Syarat dan Ketentuan *</h4>
                <textarea class="form-control" name="j_requirement_id" id="j_requirement_id"><?php echo $row->j_requirement_id; ?></textarea>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('panel97fo')?></h4>
                <div class="form-group row">
                    <label class="col-md-1"><?=$this->lang->line('panel38fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" disabled <?php if($row->jf1=='N'){echo 'checked';}else{}?> required> N<br>
                        <input type="radio" disabled <?php if($row->jf1=='Y'){echo 'checked';}else{}?> required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel39fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" disabled <?php if($row->jf2=='N'){echo 'checked';}else{}?> required> N<br>
                        <input type="radio" disabled <?php if($row->jf2=='Y'){echo 'checked';}else{}?> required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel40fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" disabled <?php if($row->jf3=='N'){echo 'checked';}else{}?> required> N<br>
                        <input type="radio" disabled <?php if($row->jf3=='Y'){echo 'checked';}else{}?> required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel41fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" disabled <?php if($row->jf4=='N'){echo 'checked';}else{}?> required> N<br>
                        <input type="radio" disabled <?php if($row->jf4=='Y'){echo 'checked';}else{}?> required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel42fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" disabled <?php if($row->jf5=='N'){echo 'checked';}else{}?> required> N<br>
                        <input type="radio" disabled <?php if($row->jf5=='Y'){echo 'checked';}else{}?> required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel43fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" disabled <?php if($row->jf6=='N'){echo 'checked';}else{}?> required> N<br>
                        <input type="radio" disabled <?php if($row->jf6=='Y'){echo 'checked';}else{}?> required> Y<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">List File Requirement</h4>
                <textarea class="form-control" name="jfen" id="jfen"><?php echo $row->jfen; ?></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Daftar File yang diperlukan</h4>
                <textarea class="form-control" name="jfid" id="jfid"><?php echo $row->jfid; ?></textarea>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label for="j_salary" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel49fo');?></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="j_salary" id="j_salary" placeholder="" value="<?php echo $row->j_salary; ?>">
                    </div>
                    <label for="j_available" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel50fo');?> *</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="j_available" id="j_available" placeholder="" value="<?php echo $row->j_available; ?>" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_pc" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel46fo');?></label>
                    <div class="col-sm-3">
                        <label for="j_pc"><a href="<?=base_url("uploads/partner_file/").$this->session->userdata('id_user').'/'.$row->j_pc?>"><?php echo $row->j_pc; ?></a></label>
                        <input type="file" class="form-control" name="j_pc" id="j_pc" placeholder="">
                    </div>
                    <label for="j_valid" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel47fo');?> *</label>
                    <div class="col-sm-3 input-group">
                        <input type="text" class="form-control mydatepicker" name="j_valid" placeholder="" id="j_valid" value="<?php echo $row->j_valid; ?>" required>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type=="submit" class="btn btn-primary">Submit</button>
                    <a href="<? echo site_url('fojoba/anvacancy'); ?>" class="btn btn-warning"><?=$this->lang->line('panel51fo');?></a>
                    <label>* <?=$this->lang->line('panel52fo');?></label>
                </div>
            </div>
        </div>
    </div>
</div>   
</form>
<?php }?>   