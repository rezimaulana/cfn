<?php foreach ($result as $row){}?>
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <ol class="breadcrumb">
            <li><a href="<?=base_url('career_center/announcement');?>"><?=$this->lang->line('announcement3');?></a></li>
            <li><a href="<?=base_url('career_center/announcement');?>"><?=$this->lang->line('announcement1');?></a></li>
            <li class="active">
            <?php 
            if($this->session->userdata('lang')=='en'){if($row->pt_categories=='ANNA'){echo 'Acceptance';}elseif($row->pt_categories=='ANNS'){echo 'Selection';}}
            elseif($this->session->userdata('lang')=='id'){if($row->pt_categories=='ANNA'){echo 'Penerimaan';}elseif($row->pt_categories=='ANNS'){echo 'Seleksi';}} 
            ?>
            </li>
            <li class="active"><?php echo $row->id_pt; ?></li>
        </ol>
    </div>
</section><!-- #page-title end -->
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix">
                <div class="single-post nobottommargin">
                    <!-- Entry Title
                    ============================================= -->
                    <div class="entry-title">
                        <h2><?php if($this->session->userdata('lang')=='en'){echo $row->pt_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row->pt_subject_id;}?></h2>
                    </div><!-- .entry-title end -->
                    <!-- Entry Meta
                    ============================================= -->
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> <?php echo $row->timestamp_b;?></li>
                        <li><i class="icon-user"></i><a href="<?php echo $row->p_cp;?>"> <?php echo $row->u_name;?></a></li>
                        <li><i class="icon-folder-open"></i><a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row->id_job;?>"> <?php if($this->session->userdata('lang')=='en'){echo $row->j_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row->j_subject_id;}?></a></li>
                        <li>
                        <?=$this->lang->line('announcement1');?> 
                        <?php 
                        if($this->session->userdata('lang')=='en'){if($row->pt_categories=='ANNA'){echo 'Acceptance';}elseif($row->pt_categories=='ANNS'){echo 'Selection';}}
                        elseif($this->session->userdata('lang')=='id'){if($row->pt_categories=='ANNA'){echo 'Penerimaan';}elseif($row->pt_categories=='ANNS'){echo 'Seleksi';}} 
                        ?>
                        </li>
                    </ul><!-- .entry-meta end -->
                    <!-- Entry Image
                    ============================================= -->
                    <div class="entry-image">
                        <a href="<?php if ($row->pt_pic == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->pt_pic;} ?>" data-lightbox="image"><img class="image_fade" src="<?php if ($row->pt_pic == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->pt_pic;} ?>" alt=""></a>
                    </div><!-- .entry-image end -->
                    <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content notopmargin">
                        <div class="accordion accordion-bg clearfix">
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?=$this->lang->line('announcement6');?></div>
                            <div class="acc_content clearfix"><?php if($this->session->userdata('lang')=='en'){echo $row->pt_content_en;}elseif($this->session->userdata('lang')=='id'){echo $row->pt_content_id;}?></div>
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?=$this->lang->line('announcement7');?></div>
                            <div class="acc_content clearfix">
                                <div class="tagcloud rightmargin-sm clearfix">
                                    <table id="table_id" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th><?=$this->lang->line('id_pendaftaran');?></th>
                                            <th><?=$this->lang->line('nama_peserta');?></th>
                                            <th><?=$this->lang->line('Status_Peserta');?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if($row->pt_categories=='ANNA'){
                                            foreach ($result2 as $row2){ ?>
                                            <tr>
                                                <td><?php echo $row2->id_apply;?></td>
                                                <td><?php echo $row2->u_name;?></td>
                                                <?php
                                                if ($this->session->userdata('lang')=='en'){
                                                    if($row2->state_1=='Y'&&$row2->state_2='N'){echo '<td>Selection</td>';}
                                                    elseif($row2->state_1=='Y'&&$row2->state_2='Y'){echo '<td>Accepted</td>';}
                                                    elseif($row2->state_1=='Q'&&$row2->state_2='S'){echo '<td>Employee</td>';}
                                                    elseif($row2->state_1=='S'&&$row2->state_2='Q'){echo '<td>Not Employee</td>';}
                                                    elseif($row2->state_1=='S'&&$row2->state_2='S'){echo '<td>Fail Selection</td>';}
                                                }
                                                elseif ($this->session->userdata('lang')=='id'){
                                                    if($row2->state_1=='Y'&&$row2->state_2='N'){echo '<td>Seleksi</td>';}
                                                    elseif($row2->state_1=='Y'&&$row2->state_2='Y'){echo '<td>Penerimaan</td>';}
                                                    elseif($row2->state_1=='Q'&&$row2->state_2='S'){echo '<td>Karyawan</td>';}
                                                    elseif($row2->state_1=='S'&&$row2->state_2='Q'){echo '<td>Bukan Karyawan</td>';}
                                                    elseif($row2->state_1=='S'&&$row2->state_2='S'){echo '<td>Gagal Seleksi</td>';}
                                                }
                                                ?>
                                            </tr>
                                                <?php
                                            }
                                        }
                                        elseif($row->pt_categories=='ANNS'){
                                            foreach ($result3 as $row3){ ?>
                                            <tr>
                                                <td><?php echo $row3->id_apply;?></td>
                                                <td><?php echo $row3->u_name;?></td>
                                                <?php
                                                if ($this->session->userdata('lang')=='en'){
                                                    if($row3->state_1=='Y'&&$row3->state_2='N'){echo '<td>Selection</td>';}
                                                    elseif($row3->state_1=='Y'&&$row3->state_2='Y'){echo '<td>Accepted</td>';}
                                                    elseif($row3->state_1=='Q'&&$row3->state_2='S'){echo '<td>Employee</td>';}
                                                    elseif($row3->state_1=='S'&&$row3->state_2='Q'){echo '<td>Not Employee</td>';}
                                                }
                                                elseif ($this->session->userdata('lang')=='id'){
                                                    if($row3->state_1=='Y'&&$row3->state_2='N'){echo '<td>Seleksi</td>';}
                                                    elseif($row3->state_1=='Y'&&$row3->state_2='Y'){echo '<td>Penerimaan</td>';}
                                                    elseif($row3->state_1=='Q'&&$row3->state_2='S'){echo '<td>Karyawan</td>';}
                                                    elseif($row3->state_1=='S'&&$row3->state_2='Q'){echo '<td>Bukan Karyawan</td>';}
                                                }
                                                ?>
                                            </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i><?php echo $row->u_name;?></div>
                            <div class="acc_content clearfix"><?php echo $row->p_desc;?></div>
                        </div>
                    </div><!-- .entry end -->
                    <!-- Post Author Info
                    ============================================= -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?=$this->lang->line('announcement5');?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="author-image">
                                <a href="<?php echo $row->p_cp;?>"><img src="<?php if ($row->u_pic == NULL) {echo base_url('images/favicon152.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->u_pic;} ?>" alt="" class="img-circle"></a>
                            </div>
                            <?php echo $row->u_name; ?><br><?php echo $row->u_1_addr.' '.$row->u_2_subdis.' '.$row->u_3_dist.'<br>'.$row->u_4_addr.' '.$row->u_postcode; ?>
                        </div>
                    </div><!-- Post Single - Author End -->
                </div>
            </div><!-- .postcontent end -->
            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">
                    <div class="widget clearfix">
                        <h4><?=$this->lang->line('announcement9');?></h4>
                        <div class="tabs nobottommargin clearfix" id="sidebar-tabs">
                            <ul class="tab-nav clearfix">
                                <li><a href="#tabs-1"><?=$this->lang->line('announcement4');?></a></li>
                                <li><a href="#tabs-2"><?=$this->lang->line('announcement1');?></a></li>
                            </ul>
                            <div class="tab-container">
                                <div class="tab-content clearfix" id="tabs-1">
                                    <div id="popular-post-list-sidebar">
                                    <?php foreach ($result4 as $row4){?>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row4->id_job;?>"><?php if($this->session->userdata('lang')=='en'){echo $row4->j_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row4->j_subject_id;}?></a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li><?php echo $row4->timestamp;?> <?=$this->lang->line('announcement8');?> <?php echo $row4->j_valid;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }?>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="tabs-2">
                                    <div id="recent-post-list-sidebar">
                                    <?php foreach ($result5 as $row5){?>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo $row5->id_pt;?>"><?php if($this->session->userdata('lang')=='en'){echo $row5->pt_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row5->pt_subject_id;}?></a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li><?php echo $row5->timestamp_b;?></li>
                                                <li><?php 
                                                if($this->session->userdata('lang')=='en'){if($row5->pt_categories=='ANNA'){echo 'Acceptance';}elseif($row5->pt_categories=='ANNS'){echo 'Selection';}}
                                                elseif($this->session->userdata('lang')=='id'){if($row5->pt_categories=='ANNA'){echo 'Penerimaan';}elseif($row5->pt_categories=='ANNS'){echo 'Seleksi';}} 
                                                ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .sidebar end -->
        </div>
    </div>
</section><!-- #content end -->