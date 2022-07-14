<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?=$this->lang->line('announcement1');?></h1>
        <span><?=$this->lang->line('announcement2');?></span>
        <ol class="breadcrumb">
            <li class="active"><?=$this->lang->line('announcement3');?></li>
            <li class="active"><?=$this->lang->line('announcement1');?></li>
        </ol>
    </div>
</section><!-- #page-title end -->
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-grid grid-container clearfix">

<?php
if($this->session->userdata('lang')=='en'){
foreach ($blog_list->result() as $row) {
?>
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="<?php if ($row->pt_pic == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->pt_pic;} ?>" data-lightbox="image"><img class="image_fade" src="<?php if ($row->pt_pic == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->pt_pic;} ?>" alt=""></a>
                </div>
                <div class="entry-title">
                    <h2><a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo $row->id_pt;?>"><?php echo $row->pt_subject_en; ?></a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> <?php echo $row->timestamp_b;?></li>
                    <li><i class="icon-briefcase"></i> <?php if ($row->pt_categories=='ANNA'){echo 'Accepted';}elseif ($row->pt_categories=='ANNS'){echo 'Selection';} ?></li>
                </ul>
                <div class="entry-content">
                    <p><?php echo $row->j_subject_en; ?></p>
                    <p><?php echo $row->u_name; ?><br><?php echo $row->u_1_addr.' '.$row->u_2_subdis.' '.$row->u_3_dist.' '.$row->u_4_addr.' '.$row->u_postcode; ?></p>
                    <a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo ($row->id_pt);?>"class="more-link">Read More</a>
                </div>
            </div>
<?php
}}
elseif($this->session->userdata('lang')=='id'){
foreach ($blog_list->result() as $row) { 
?>
            <div class="entry clearfix">
                <div class="entry-image">
                    <a href="<?php if ($row->pt_pic == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->pt_pic;} ?>" data-lightbox="image"><img class="image_fade" src="<?php if ($row->pt_pic == NULL) {echo base_url('images/logo@2x.png');} else{echo base_url('uploads/partner_file/').$row->id_user.'/'.$row->pt_pic;} ?>" alt=""></a>
                </div>
                <div class="entry-title">
                    <h2><a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo $row->id_pt;?>"><?php echo $row->pt_subject_id; ?></a></h2>
                </div>
                <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> <?php echo $row->timestamp_b;?></li>
                    <li><i class="icon-comments"></i> <?php if ($row->pt_categories=='ANNA'){echo 'Penerimaan';}elseif ($row->pt_categories=='ANNS'){echo 'Seleksi';} ?></li>
                </ul>
                <div class="entry-content">
                    <p><?php echo $row->j_subject_id; ?></p>
                    <p><?php echo $row->u_name; ?><br><?php echo $row->u_1_addr.' '.$row->u_2_subdis.' '.$row->u_3_dist.' '.$row->u_4_addr.' '.$row->u_postcode; ?></p>
                    <a href="<?php echo site_url('career_center/read_announcement')?>/<?php echo $row->id_pt;?>"class="more-link">Lebih Lanjut</a>
                </div>
            </div>
<?php
}}?>            

            </div><!-- #posts end -->
            <!-- Pagination
            ============================================= -->
            <?php if (strlen($pagination)) {echo $pagination;}?>
        </div>
    </div>
</section><!-- #content end -->