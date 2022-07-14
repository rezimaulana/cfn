<?php foreach ($result as $row){}?>
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li><a href="<?=base_url('career_center/job_vacancy');?>"><?=$this->lang->line('vacancy3');?></a></li>
            <li><a href="<?=base_url('career_center/job_vacancy');?>"><?=$this->lang->line('vacancy1');?></a></li>
            <li class="active"><?php echo $row->id_job;?></li>
        </ol>
    </div>
</section><!-- #page-title end -->
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_three_fifth nobottommargin">
                <div class="fancy-title title-bottom-border">
                    <h3><?php if($this->session->userdata('lang')=='en'){echo $row->j_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_subject_id;}?></h3>
                </div>
                <div class="entry-image">
                    <a href="<?php if ($row->j_pc == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->j_pc;} ?>" data-lightbox="image"><img class="image_fade" src="<?php if ($row->j_pc == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->j_pc;} ?>" alt=""></a>
                </div>

                <div class="accordion accordion-bg clearfix">
                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?=$this->lang->line('vacancy4');?></div>
                    <div class="acc_content clearfix">
                        <?php if($this->session->userdata('lang')=='en'){echo $row->j_desc_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_desc_id;}?>
                    </div>
                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?=$this->lang->line('vacancy5');?></div>
                    <div class="acc_content clearfix">
                        <?php if($this->session->userdata('lang')=='en'){echo $row->j_requirement_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_requirement_id;}?>
                    </div>
                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?=$this->lang->line('fileku');?></div>
                    <div class="acc_content clearfix">
                        <?php if($this->session->userdata('lang')=='en'){echo $row->jfen;}elseif($this->session->userdata('lang')=='id'){echo $row->jfid;}?>
                    </div>

                    <?php if($result_ann >> 0){  ?>
                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?=$this->lang->line('Status_Peserta');?></div>
                    <div class="acc_content rightmargin-sm clearfix">
                        <?=$this->lang->line('prgrph_Status_Peserta');?><br><br>
                        <table id="table_id" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th><?=$this->lang->line('Pengumuman');?></th>
                                <th><?=$this->lang->line('Halaman_Tautan');?></th>
                                <th><?=$this->lang->line('Keterangan_Waktu');?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php $path_ann=base_url('career_center/read_announcement/');
                            foreach ($result_ann as $ann){
                            if ($ann->pt_categories == 'ANNS') {
                                echo '<tr>';
                                echo '<td>Seleksi</td>';
                                echo '<td><a href="'.$path_ann.$ann->id_pt.'">';
                                if($this->session->userdata('lang')=='en'){
                                    echo $ann->pt_subject_en;
                                }
                                elseif($this->session->userdata('lang')=='id'){
                                    echo $ann->pt_subject_id;
                                }
                                echo '</a></td>';
                                echo '<td>'.$ann->timestamp_b.'</td>';
                                echo '</tr>';
                            }
                            if ($ann->pt_categories == 'ANNA') {
                                echo '<tr>';
                                echo '<td>Penerimaan</td>';
                                echo '<td><a href="'.$path_ann.$ann->id_pt.'">';
                                if($this->session->userdata('lang')=='en'){
                                    echo $ann->pt_subject_en;
                                }
                                elseif($this->session->userdata('lang')=='id'){
                                    echo $ann->pt_subject_id;
                                }
                                echo '</a></td>';
                                echo '<td>'.$ann->timestamp_b.'</td>';
                                echo '</tr>';
                            }
                            }?>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php }  
                    else{} 
                    ?>

                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?php echo $row->u_name;?></div>
                    <div class="acc_content clearfix"><?php echo $row->p_desc;?></div>
                </div>
                <!-- Post Author Info
                ============================================= -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?=$this->lang->line('vacancy14');?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="author-image">
                        <a href="<?php echo $row->p_cp;?>"><img src="<?php if ($row->u_pic == NULL) {echo base_url('images/favicon152.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->u_pic;} ?>" alt="" class="img-circle"></a>
                        </div>
                        <?php echo $row->u_name; ?><br><?php echo $row->u_1_addr.' '.$row->u_2_subdis.' '.$row->u_3_dist.'<br>'.$row->u_4_addr.' '.$row->u_postcode; ?>
                    </div>
                </div><!-- Post Single - Author End -->
            </div>
            <div class="col_two_fifth nobottommargin col_last">
                <div class="widget clearfix">
                    <div id="post-list-footer">
                        <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                            <h4><?php if($this->session->userdata('lang')=='en'){echo $row->j_type_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_type_id;}?></h4>
                        </div><ul class="entry-meta"><li><?=$this->lang->line('vacancy6');?></li></ul></div></div>
                        <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                            <h4><?php if($this->session->userdata('lang')=='en'){echo $row->j_industry_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_industry_id;}?></h4>
                        </div><ul class="entry-meta"><li><?=$this->lang->line('vacancy7');?></li></ul></div></div>
                        <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                            <h4><?php if($this->session->userdata('lang')=='en'){echo $row->j_function_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_function_id;}?></h4>
                        </div><ul class="entry-meta"><li><?=$this->lang->line('vacancy8');?></li></ul></div></div>
                        <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                            <h4><?php if($this->session->userdata('lang')=='en'){echo $row->j_experience_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_experience_id;}?></h4>
                        </div><ul class="entry-meta"><li><?=$this->lang->line('vacancy9');?></li></ul></div></div>
                        <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                            <h4><?php if($this->session->userdata('lang')=='en'){echo $row->j_education_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_education_id;}?></h4>
                        </div><ul class="entry-meta"><li><?=$this->lang->line('vacancy10');?></li></ul></div></div>
                        <?php if ($row->j_salary!=NULL)
                        {
                            echo'
                            <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                                <h4>'.$row->j_salary.'</h4>
                            </div><ul class="entry-meta"><li>'.$this->lang->line('vacancy11').'</li></ul></div></div>
                            ';
                        }
                        else{
                            echo '';
                        }
                        ?>
                         <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                            <h4>
                                <?php if($row->jf1=='Y') {echo $this->lang->line('panel38fo');}?>
                                <?php if($row->jf2=='Y') {echo $this->lang->line('panel39fo');}?>
                                <?php if($row->jf3=='Y') {echo $this->lang->line('panel40fo');}?>
                                <?php if($row->jf4=='Y') {echo $this->lang->line('panel41fo');}?>
                                <?php if($row->jf5=='Y') {echo $this->lang->line('panel42fo');}?>
                                <?php if($row->jf6=='Y') {echo $this->lang->line('panel43fo');}?>
                            </h4>
                        </div><ul class="entry-meta"><li><?=$this->lang->line('panel97fo');?></li></ul></div></div>
                        <div class="spost clearfix"><div class="entry-c"><div class="entry-title">
                            <h4><?=$this->lang->line('vacancy12');?> <?php echo $row->j_valid;?></h4>
                        </div><ul class="entry-meta"><li><?php echo $row->timestamp;?></li></ul></div></div>
                        <div class="spost clearfix"><div class="entry-c"><div class="entry-title"><h4></h4></div><ul class="entry-meta"><li></li></ul></div></div>
                    </div>
                </div>
                <?php $dateUTC = $row->j_valid;$dateTo = new DateTime($dateUTC);$dateUNX = $dateTo->format('U');
                    if(now()>$dateUNX){$attds='disabled';$infovalid='This vacancy is no longer valid!';}
                    elseif(now()<=$dateUNX){$attds='';$infovalid='';}
                ?>
                <?php if($this->session->userdata('r_lvl')=='3'||$this->session->userdata('r_lvl')=='5'){$attda='';}else{$attda='hidden';}?>
                <form onSubmit="if(!confirm('Are you sure to register for this vacancy?')){return false;}" action="<?=base_url("career_center/apply_vacancy")?>" method="post">
                    <div class="col_full">
                        <input type="hidden" name="id_job" value="<?php echo $row->id_job;?>">
                        <input type="hidden" name="id_file" value="<?php echo $this->session->userdata('id_user');?>">
                        <input type="hidden" name="r_lvl" value="<?php echo $this->session->userdata('r_lvl');?>">
                        <button class="button button-3d button-large btn-block nomargin <?php echo $attda;?>" value="apply" <?php echo $attds;?>><?=$this->lang->line('vacancy13');?></button>
                        <h4 class="text-danger"><?php echo $infovalid; ?></h4>
                    </div>
                </form>
                <?php echo '<h4 class="text-success">'.$this->session->flashdata("success").'</h4>'; ?>
                <?php echo '<h4 class="text-danger">'.$this->session->flashdata("error").'</h4>'; ?>
               
            </div>



            <div class="single-post nobottommargin">
                <div class="line"></div><h4><?=$this->lang->line('vacancy15')?></h4>
                <div class="related-posts clearfix">
                    
                    <div class="col_half nobottommargin">
                        <?php foreach ($result4 as $row4){?>
                        <div class="mpost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row4->id_job;?>"><?php if($this->session->userdata('lang')=='en'){echo $row4->j_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row4->j_subject_id;}?></a></h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><a href="<?php echo $row->p_cp;?>"><i class="icon-user"></i> <?php echo $row->u_name; ?></a></li>
                                    <li><i class="icon-calendar3"></i> <?php echo $row4->timestamp; ?> s/d <?php echo $row4->j_valid;?></li>
                                </ul>
                                <div class="entry-content">
                                    <?php if($this->session->userdata('lang')=='en'){echo $row4->j_type_en.'';} elseif($this->session->userdata('lang')=='id'){echo $row4->j_type_id.' / ';} ?>
                                    <?php if($this->session->userdata('lang')=='en'){echo $row4->j_industry_en.'';} elseif($this->session->userdata('lang')=='id'){echo $row4->j_industry_id.' / ';} ?>
                                    <?php if($this->session->userdata('lang')=='en'){echo $row4->j_function_en.'';} elseif($this->session->userdata('lang')=='id'){echo $row4->j_function_id.'';} ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="col_half nobottommargin col_last">
                        <?php foreach ($result5 as $row5){?>
                        <div class="mpost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo $row5->id_pt;?>"><?php if($this->session->userdata('lang')=='en'){echo $row5->pt_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row5->pt_subject_id;}?></a></h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <?php echo $row5->timestamp_b;?></li>
                                    <li><i class="icon-user"></i><a href="<?php echo $row->p_cp;?>"> <?php echo $row->u_name;?></a></li>
                                </ul>
                                <div class="entry-content">
                                    <a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row5->id_job;?>"> <?php if($this->session->userdata('lang')=='en'){echo $row5->j_subject_en.' ';}elseif($this->session->userdata('lang')=='id'){echo $row5->j_subject_id.' ';}?></a>
                                    <?=$this->lang->line('announcement1');?> 
                                    <?php 
                                    if($this->session->userdata('lang')=='en'){if($row5->pt_categories=='ANNA'){echo 'Acceptance';}elseif($row5->pt_categories=='ANNS'){echo 'Selection';}}
                                    elseif($this->session->userdata('lang')=='id'){if($row5->pt_categories=='ANNA'){echo 'Penerimaan';}elseif($row5->pt_categories=='ANNS'){echo 'Seleksi';}} 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>



        </div>
    </div>
</section><!-- #content end -->









