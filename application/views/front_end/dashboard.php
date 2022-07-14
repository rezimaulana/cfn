<!-- Content
============================================= -->


<div class="content-wrap">



    <div class="container clearfix">

        

        

        

        <div class="fancy-title title-border">
            <h3><?php echo $this->lang->line('dash1'); ?></h3>
        </div>
        <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">
        <?php foreach ($result1 as $row1){?>
            <div class="oc-item">
                <div class="ipost clearfix">
                    <div class="entry-image">
                        <a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row1->id_job;?>"><img class="image_fade" src="<?php if ($row1->j_pc == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row1->id_user.'/'.$row1->j_pc;} ?>" alt="Image"></a>
                    </div>
                    <div class="entry-title">
                        <h4><a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row1->id_job;?>"><?php if($this->session->userdata('lang')=='en'){echo $row1->j_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row1->j_subject_id;}?></a></h4>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> <?php echo $row1->timestamp;?></li>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>



        <div class="fancy-title title-border topmargin">
            <h3><?php echo $this->lang->line('dash2'); ?></h3>
        </div>
        <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">
            <?php foreach ($result2 as $row2){?>
            <div class="oc-item">
                <div class="ipost clearfix">
                    <div class="entry-image">
                        <a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo $row2->id_pt;?>"><img class="image_fade" src="<?php if ($row2->pt_pic == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row1->id_user.'/'.$row2->pt_pic;} ?>" alt="Image"></a>
                    </div>
                    <div class="entry-title">
                        <h4><a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo $row2->id_pt;?>"><?php if($this->session->userdata('lang')=='en'){echo $row2->pt_subject_en;}elseif($this->session->userdata('lang')=='id'){echo $row2->pt_subject_id;}?></a></h4>
                    </div>
                    <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> <?php echo $row2->timestamp_b;?></li>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>




    </div>

</div>

