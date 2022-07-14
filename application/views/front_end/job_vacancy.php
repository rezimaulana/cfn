<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?=$this->lang->line('vacancy1');?></h1>
        <span><?=$this->lang->line('vacancy2');?></span>
        <ol class="breadcrumb">
            <li class="active"><?=$this->lang->line('vacancy3');?></li>
            <li class="active"><?=$this->lang->line('vacancy1');?></li>
        </ol>
    </div>
</section><!-- #page-title end -->
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <!-- Posts
        ============================================= -->
        <div id="posts" class="post-grid grid-container post-masonry post-masonry-full clearfix">
<?php if($this->session->userdata('lang')=='en'){foreach ($blog_list->result() as $row) {?>
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="<?php if ($row->j_pc == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->j_pc;} ?>" data-lightbox="image"><img class="image_fade" src="<?php if ($row->j_pc == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->j_pc;} ?>" alt=""></a>
                </div>
                <div class="entry-title">
                    <h2><a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row->id_job;?>"><?php echo $row->j_subject_en;?></a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><a href="<?php echo $row->p_cp;?>"><i class="icon-user"></i> <?php echo $row->u_name; ?></a></li>
                    <li><i class="icon-calendar3"></i> <?php echo $row->timestamp; ?> valid until <?php echo $row->j_valid;?></li>
                    <li><?php echo $row->j_type_en; ?></li>
                    <li><?php echo $row->j_industry_en; ?></li>
                    <li><?php echo $row->j_function_en; ?></li>
                </ul>
                <div class="entry-content">
                    <p><?php echo $row->u_name; ?><br><?php echo $row->u_1_addr.' '.$row->u_2_subdis.' '.$row->u_3_dist.' '.$row->u_4_addr.' '.$row->u_postcode; ?></p>
                    <a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row->id_job;?>" class="more-link">Read More</a>
                </div>
            </div>
<?php }}
elseif($this->session->userdata('lang')=='id'){foreach ($blog_list->result() as $row) { ?>
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="<?php if ($row->j_pc == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->j_pc;} ?>" data-lightbox="image"><img class="image_fade" src="<?php if ($row->j_pc == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->j_pc;} ?>" alt=""></a>
                </div>
                <div class="entry-title">
                    <h2><a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row->id_job;?>"><?php echo $row->j_subject_id;?></a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><a href="<?php echo $row->p_cp;?>"><i class="icon-user"></i> <?php echo $row->u_name; ?></a></li>
                    <li><i class="icon-calendar3"></i> <?php echo $row->timestamp; ?> s/d <?php echo $row->j_valid;?></li>
                    <li><?php echo $row->j_type_id; ?></li>
                    <li><?php echo $row->j_industry_id; ?></li>
                    <li><?php echo $row->j_function_id; ?></li>
                </ul>
                <div class="entry-content">
                    <p><?php echo $row->u_name; ?><br><?php echo $row->u_1_addr.' '.$row->u_2_subdis.' '.$row->u_3_dist.' '.$row->u_4_addr.' '.$row->u_postcode; ?></p>
                    <a href="<?php echo site_url('career_center/read_vacancy')?>/<?php echo $row->id_job;?>" class="more-link">Read More</a>
                </div>
            </div>
 <?php }} ?>


            

        </div><!-- #posts end -->
    </div>
    <div class="line"></div>
    <div class="container clearfix">
        <!-- Pagination
        ============================================= -->
        <?php if (strlen($pagination)) {echo $pagination;}?>
    </div>
    <div class="line"></div>
</section><!-- #content end -->