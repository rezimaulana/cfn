<form class="form-horizontal" action="<?php echo site_url("fojoba/vnanaccept")?>" method="post" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">English</h4>
                <div class="form-group row">
                    <label for="j_subject_id" class="col-sm-3 text-left control-label col-form-label">Subject *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="pt_subject_en" id="pt_subject_en" placeholder="" required>
                    </div>
                </div>
                <h6 class="card-title">Content *</h4>
                <textarea class="form-control" name="pt_content_en" id="pt_content_en"></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bahasa Indonesia</h4>
                <div class="form-group row">
                    <label for="j_subject_id" class="col-sm-3 text-left control-label col-form-label">Subjek *</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="pt_subject_id" id="pt_subject_id" placeholder="" required>
                    </div>
                </div>
                <h6 class="card-title">Konten *</h4>
                <textarea class="form-control" name="pt_content_id" id="pt_content_id"></textarea>
            </div>
        </div>
    </div>
</div>
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel25fo');?> *</label>
                    <div class="col-sm-3">
                        <select name="id_job" id="id_job" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                            <option>Job ID</option>
                            <?php foreach ($result as $row){ ?>
                            <option value="<?php echo $row->id_job?>"><?php echo $row->id_job?></option>
                            <?php } ?>
                        </select> 
                    </div>
                    <label for="j_pc" class="col-sm-3 text-right control-label col-form-label"><?=$this->lang->line('panel54fo');?></label>
                    <div class="col-sm-3">
                        <input type="file" class="form-control" name="pt_pic" id="pt_pic" placeholder="">
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type=="submit" class="btn btn-primary">Submit</button>
                    <a href="<? echo site_url('fojoba/anaccept'); ?>" class="btn btn-warning"><?=$this->lang->line('panel51fo');?></a>
                    <label>* <?=$this->lang->line('panel52fo');?></label>
                </div>
            </div>
        </div>
    </div>
</div>
</form>