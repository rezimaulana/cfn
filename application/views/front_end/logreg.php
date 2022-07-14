<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$current = base_url(uri_string());
$tabinstr = base_url("logreg/instr");
$tablogin = base_url("logreg/login");
$tabregpu = base_url("logreg/regpu");
$tabregpa = base_url("logreg/regpa");
$tabvlogin = base_url("logreg/login_validation");
$tabvregpu = base_url("logreg/regpu_validation");
$tabvregpa = base_url("logreg/regpa_validation");
?>
<!-- Recaptcha!
============================================= -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- style="transform:scale(0.77);transform-origin:0 0" -->
<!-- hxw style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"  -->

<!-- Input!
============================================= -->
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>

<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1><?=$this->lang->line('logreg-logreg');?></h1>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent divcenter nobottommargin clearfix">

                <ul class="nav nav-pills boot-tabs">
                    <li class="col-md-2 col-md-2 <?=($current == $tabinstr) ? 'active' : ''; ?>"><a class="nav-link" href="<?=base_url("logreg/instr")?>"><?=$this->lang->line('logreg-tabnav-1');?></a></li>
                    <li class="col-md-2 col-md-2 <?=($current == $tablogin) || ($current == $tabvlogin) ? 'active' : ''; ?>"><a class="nav-link" href="<?=base_url("logreg/login")?>"><?=$this->lang->line('logreg-tabnav-2');?></a></li>
                    <li class="col-md-2 col-md-2 <?=($current == $tabregpu) || ($current == $tabvregpu) ? 'active' : ''; ?>"><a class="nav-link" href="<?=base_url("logreg/regpu")?>"><?=$this->lang->line('logreg-tabnav-3');?></a></li>
                    <li class="col-md-2 col-md-2 <?=($current == $tabregpa) || ($current == $tabvregpa) ? 'active' : ''; ?>"><a class="nav-link" href="<?=base_url("logreg/regpa")?>"><?=$this->lang->line('logreg-tabnav-4');?></a></li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane <?= ($current == $tabinstr) ? 'active' : ''; ?>">
                        <div class="panel panel-default nobottommargin">
                            <div class="panel-body" style="padding: 40px;">
                                <ol>
                                    <h3><?=$this->lang->line('logreg-instr');?></h3>
                                    <li><?=$this->lang->line('logreg-instr-1');?></li>
                                    <li><?=$this->lang->line('logreg-instr-2');?></li>
                                    <li><?=$this->lang->line('logreg-instr-3');?></li>
                                    <li><?=$this->lang->line('logreg-instr-4');?></li>
                                </ol>
                            </div>
                        </div>	
                    </div>

                    <div style="max-width:585px;" class="tab-pane <?php echo ($current == $tablogin) || ($current == $tabvlogin) ? 'active' : ''; ?>">
                        <div class="panel panel-default nobottommargin">
                            <div class="panel-body" style="padding: 40px;">
                                <form id="login-form" name="login-form" class="nobottommargin" action="<?=base_url("logreg/login_validation")?>" method="post">
                                    <h3><?=$this->lang->line('logreg-login');?></h3>
                                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error").'</h4>'; ?>
                                    <div class="col_full">
                                        <label for="login-form-username"><?=$this->lang->line('logreg-login-1');?></label>
                                        <input type="email" id="login-form-email" name="u_email" value="" class="form-control" />
                                        <span class="text-danger"><?php echo form_error('u_email'); ?></span>
                                    </div>
                                    <div class="col_full">
                                        <label for="login-form-password"><?=$this->lang->line('logreg-login-2');?></label>
                                        <input type="password" id="login-form-password" name="u_pass" value="" class="form-control" />
                                        <span class="text-danger"><?php echo form_error('u_pass'); ?></span>  
                                    </div>                              
                                    <div class="col_full">
                                        <div class="g-recaptcha" style="transform:scale(1);-webkit-transform:scale(0.65);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LfdxZwUAAAAABwTmbsPbF4QCL2AsONF49W6IG_Q"></div>
                                        <span class="text-danger"><?php echo form_error('g-recaptcha-response'); ?></span> 
                                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login"><?=$this->lang->line('logreg-login-3');?></button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>		
                    </div>

                    <div style="max-width:585px;" class="tab-pane <?php echo ($current == $tabregpu) || ($current == $tabvregpu) ? 'active' : ''; ?>">
                        <div class="panel panel-default nobottommargin">
                            <div class="panel-body" style="padding: 40px;">
                                <form id="regpu-form" name="regpu-form" class="nobottommargin" action="<?=base_url("logreg/regpu_validation")?>" method="post">
                                    <h3><?=$this->lang->line('logreg-regpu');?></h3>
                                    <?php echo '<h4 class="text-success">'.$this->session->flashdata("msg").'</h4>'; ?>
                                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error").'</h4>'; ?>
                                    <div class="col_full">
                                        <label for="regpu-form-email"><?=$this->lang->line('logreg-regpu-1');?></label>
                                        <input type="email" id="regpu-form-email" name="u_email" value="" class="form-control" />
                                        <span class="text-danger"><?php echo form_error('u_email'); ?></span>
                                    </div>
                                    <div class="col_full">
                                        <label for="regpu-form-account"><?=$this->lang->line('logreg-regpu-5');?></label>
                                        <select type="number" id="regpu-form-account" name="r_lvl" value="" class="select-1 form-control">
                                            <option value=""><?=$this->lang->line('logreg-regpu-9');?></option>
                                            <option value="3"><?=$this->lang->line('logreg-regpu-7');?></option>
                                            <option value="5"><?=$this->lang->line('logreg-regpu-8');?></option>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('r_lvl'); ?></span>
                                    </div>
                                    <div class="col_full">
                                        <label for="regpu-form-password"><?=$this->lang->line('logreg-regpu-2');?></label>
                                        <input type="password" id="regpu-form-password" name="u_pass" value="" class="form-control" />
                                        <span class="text-danger"><?php echo form_error('u_pass'); ?></span>  
                                    </div>
                                    <div class="col_full">
                                        <label for="regpu-form-repassword"><?=$this->lang->line('logreg-regpu-3');?></label>
                                        <input type="password" id="regpu-form-repassword" name="confirm_u_pass" value="" class="form-control" />
                                        <span class="text-danger"><?php echo form_error('confirm_u_pass'); ?></span> 
                                    </div>
                                    <div class="col_full nobottommargin">
                                        <div class="g-recaptcha" style="transform:scale(1);-webkit-transform:scale(0.65);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LfdxZwUAAAAABwTmbsPbF4QCL2AsONF49W6IG_Q"></div>
                                        <span class="text-danger"><?php echo form_error('g-recaptcha-response'); ?></span> 
                                        <button class="button button-3d button-black nomargin" id="regpu-form-submit" name="regpu-form-submit" value="regpu"><?=$this->lang->line('logreg-regpu-4');?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane <?php echo ($current == $tabregpa) || ($current == $tabvregpa) ? 'active' : ''; ?>">
                        <div class="panel panel-default nobottommargin">
                            <div class="panel-body" style="padding: 40px;">
                                <form id="regpa-form" name="regpa-form" class="nobottommargin" action="<?=base_url("logreg/regpa_validation")?>" method="post">
                                    <h3><?=$this->lang->line('logreg-regpa');?></h3>
                                    <?php echo '<h4 class="text-success">'.$this->session->flashdata("msg").'</h4>'; ?>
                                    <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error").'</h4>'; ?>
                                    <div class="col_one_third">
                                        <label for="regpa-form-email"><?=$this->lang->line('logreg-regpa-1');?></label>
                                        <input type="email" id="regpa-form-email" name="u_email" value="" class="form-control" placeholder="<?php echo ($this->session->userdata('u_email') == '') ? '' : 'Please input your company email address.'; ?>" required/>
                                        <span class="text-danger"><?php echo form_error('u_email'); ?></span>
                                    </div>
                                    <div class="col_one_third">
                                        <label for="regpa-form-name"><?=$this->lang->line('logreg-regpa-2');?></label>
                                        <input type="text" id="regpa-form-name" name="u_name" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_name'); ?></span>
                                    </div>
                                    <div class="col_one_third col_last">
                                        <label for="regpa-form-id"><?=$this->lang->line('logreg-regpa-3');?></label>
                                        <select type="number" id="regpa-form-id" name="c_id" value="" class="select-1 form-control" required>
                                            <option value=""><?=$this->lang->line('logreg-regpa-14');?></option>
                                            <?php foreach($result as $row) {?>
                                            <option value="<?php echo $row->c_id; ?>"><?php echo $row->c_nicename; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span class="text-danger"><?php echo form_error('c_id'); ?></span>
                                    </div>
                                    <div class="col_half">
                                        <label for="regpa-form-1_addr"><?=$this->lang->line('logreg-regpa-4');?></label>
                                        <input type="text" id="regpa-form-1_addr" name="u_1_addr" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_1_addr'); ?></span>
                                    </div>
                                    <div class="col_one_fourth">
                                        <label for="regpa-form-2_subdis"><?=$this->lang->line('logreg-regpa-7');?></label>
                                        <input type="text" id="regpa-form-2_subdis" name="u_2_subdis" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_2_subdis'); ?></span>
                                    </div>
                                    <div class="col_one_fourth col_last">
                                        <label for="regpa-form-3_dist"><?=$this->lang->line('logreg-regpa-8');?></label>
                                        <input type="text" id="regpa-form-3_dist" name="u_3_dist" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_3_dist'); ?></span>
                                    </div>
                                    <div class="col_one_fourth">
                                        <label for="regpa-form-4_addr"><?=$this->lang->line('logreg-regpa-9');?></label>
                                        <input type="text" id="regpa-form-4_addr" name="u_4_addr" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_4_addr'); ?></span>
                                    </div>
                                    <div class="col_one_fourth">
                                        <label for="regpa-form-postcode"><?=$this->lang->line('logreg-regpa-10');?></label>
                                        <input type="number" id="regpa-form-postcode" name="u_postcode" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_postcode'); ?></span>  
                                    </div>
                                    <div class="col_half col_last">
                                        <label for="regpa-form-phone"><?=$this->lang->line('logreg-regpa-6');?></label>
                                        <input placeholder="" type="number" id="regpa-form-phone" name="u_phone" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_phone'); ?></span>
                                    </div>
                                    <div class="col_half">
                                        <label for="regpa-form-password"><?=$this->lang->line('logreg-regpa-11');?></label>
                                        <input type="password" id="regpa-form-password" name="u_pass" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('u_pass'); ?></span>  
                                    </div>
                                    <div class="col_half col_last">
                                        <label for="regpa-form-repassword"><?=$this->lang->line('logreg-regpa-12');?></label>
                                        <input type="password" id="regpa-form-repassword" name="confirm_u_pass" value="" class="form-control" required/>
                                        <span class="text-danger"><?php echo form_error('confirm_u_pass'); ?></span> 
                                    </div>
                                    <div class="col_full nobottommargin">
                                        <div class="g-recaptcha" style="transform:scale(1);-webkit-transform:scale(0.65);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LfdxZwUAAAAABwTmbsPbF4QCL2AsONF49W6IG_Q"></div>
                                        <span class="text-danger"><?php echo form_error('g-recaptcha-response'); ?></span> 
                                        <button class="button button-3d button-black nomargin" id="regpa-form-submit" name="regpa-form-submit" value="regpa"><?=$this->lang->line('logreg-regpa-13');?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div><!-- tab-content end -->

            </div><!-- .postcontent end -->

        </div>

    </div>

</section><!-- #content end -->