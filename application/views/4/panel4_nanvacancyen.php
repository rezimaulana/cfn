<form class="form-horizontal" action="<?php echo site_url("fojoba/vnanvacancyen")?>" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-12">
        <div class="card">              
            <div class="card-body">
                <h4 class="card-title">English</h4>
                <div class="form-group row">
                    <label for="j_subject_en" class="col-sm-3 text-right control-label col-form-label">Subject *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_subject_en" id="j_subject_en" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_type_en" class="col-sm-3 text-right control-label col-form-label">Job Type *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_type_en" id="j_type_en" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_industry_en" class="col-sm-3 text-right control-label col-form-label">Job Industry *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_industry_en" id="j_industry_en" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_function_en" class="col-sm-3 text-right control-label col-form-label">Job Function *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_function_en" id="j_function_en" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_experience_en" class="col-sm-3 text-right control-label col-form-label">Experience *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_experience_en" id="j_experience_en" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_education_en" class="col-sm-3 text-right control-label col-form-label">Education *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="j_education_en" id="j_education_en" placeholder="" required>
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
                <h6 class="card-title">Description</h4>
                <textarea class="form-control" name="j_desc_en" id="j_desc_en"></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Requirement</h4>
                <textarea class="form-control" name="j_requirement_en" id="j_requirement_en"></textarea>
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
                        <input type="radio" name="jf1" value="N" required> N<br>
                        <input type="radio" name="jf1" value="Y" required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel39fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" name="jf2" value="N" required> N<br>
                        <input type="radio" name="jf2" value="Y" required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel40fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" name="jf3" value="N" required> N<br>
                        <input type="radio" name="jf3" value="Y" required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel41fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" name="jf4" value="N" required> N<br>
                        <input type="radio" name="jf4" value="Y" required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel42fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" name="jf5" value="N" required> N<br>
                        <input type="radio" name="jf5" value="Y" required> Y<br>
                    </div>
                    <label class="col-md-1"><?=$this->lang->line('panel43fo')?></label>
                    <div class="col-md-1">
                        <input type="radio" name="jf6" value="N" required> N<br>
                        <input type="radio" name="jf6" value="Y" required> Y<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">List File Requirement</h4>
                <textarea class="form-control" name="jfen" id="jfen">
                <p><em><strong>RESUME</strong></em></p>
                <ol>
                <li>&nbsp;</li>
                </ol>
                <p><em><strong>CV</strong></em></p>
                <ol>
                <li>&nbsp;</li>
                </ol>
                <p><em><strong>CERTIFICATE</strong></em></p>
                <ol>
                <li>&nbsp;</li>
                </ol>
                <p><em><strong>QUALIFICATION</strong></em></p>
                <ol>
                <li>&nbsp;</li>
                </ol>
                <p><em><strong>PHOTO</strong></em></p>
                <ol>
                <li>&nbsp;</li>
                </ol>
                <p><em><strong>EXTRA</strong></em></p>
                <ol>
                <li>&nbsp;</li>
                </ol>
                </textarea>
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
                        <input type="text" class="form-control" name="j_salary" id="j_salary" placeholder="">
                    </div>
                    <label for="j_available" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel50fo');?> *</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" name="j_available" id="j_available" placeholder="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="j_pc" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel46fo');?></label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control" name="j_pc" id="j_pc" placeholder="">
                    </div>
                    <label for="j_valid" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel47fo');?> *</label>
                    <div class="col-sm-3 input-group">
                        <input type="text" class="form-control mydatepicker" name="j_valid" placeholder="" id="j_valid" required>
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