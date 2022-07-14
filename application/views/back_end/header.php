<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Header
============================================= -->
<header id="header">

	<div id="header-wrap">

		<div class="container clearfix">

			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

			<!-- Logo
			============================================= -->
			<div id="logo">
				<a href="<?= base_url() ?>" class="standard-logo"><img src="<?= base_url("images/logo.png") ?>" alt="POLMAN"></a>
				<a href="<?= base_url() ?>" class="retina-logo"><img src="<?= base_url("images/logo@2x.png") ?>" alt="POLMAN"></a>
			</div><!-- #logo end -->

			<!-- Primary Navigation
			============================================= -->
			<nav id="primary-menu" class="style-2 with-arrows">

				<ul>
					<li><a href="#"><div><?=$this->lang->line('header-career');?></div></a>
						<ul>
							<li><a href="<?=base_url("career_center/announcement")?>"><div><?=$this->lang->line('header-announ');?></div></a></li>
							<li><a href="<?=base_url("career_center/job_vacancy")?>"><div><?=$this->lang->line('header-job');?></div></a></li>
						</ul>
					</li>
					<li><a href="#"><div><?=$this->lang->line('header-student');?></div></a>
						<ul>
							<li><a href="#"><div><?=$this->lang->line('header-news');?></div></a></li>
							<li><a href="#"><div><?=$this->lang->line('header-event');?></div></a></li>
						</ul>
					</li>
					<li><a href="#"><div><?=$this->lang->line('header-partner');?></div></a>
						<ul>
							<li><a href="#"><div><?=$this->lang->line('header-partners');?></div></a></li>
							<li><a href="<?=base_url("logreg/regpa")?>"><div><?=$this->lang->line('header-regpa');?></div></a></li>
						</ul>
					</li>
					<li><a href="#"><div><?=$this->lang->line('header-info');?></div></a>
						<ul>
							<li><a href="#"><div><?=$this->lang->line('header-contact');?></div></a></li>
							<li><a href="#"><div><?=$this->lang->line('header-about');?></div></a></li>
							<li><a href="#"><div><?=$this->lang->line('header-privacy');?></div></a></li>
							<li><a href="#"><div><?=$this->lang->line('header-termsu');?></div></a></li>
							<li><a href="#"><div><?=$this->lang->line('header-faqs');?></div></a></li>
							<li><a href="#"><div><?=$this->lang->line('header-feedback');?></div></a></li>
						</ul>
					</li>
				</ul>

				<!-- Top Search
				============================================= -->
				<div id="top-search">
					<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
					<form action="<?=base_url("career_center/search");?>" method="post" enctype="multipart/form-data">
						<input type="text" class="form-control" name="s" id="s">
					</form>
				</div><!-- #top-search end -->

			</nav><!-- #primary-menu end -->

			<!-- Account Bar
			============================================= -->
			<div id="top-account" class="dropdown">
				<a href="#" style="text-transform:uppercase" class="<?=($this->session->userdata('u_email') != '') ? 'hidden-xs' : 'hidden'; ?> btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<?php echo $this->session->userdata('r_rule');?>
					<i class="icon-angle-down"></i>
					<i class="icon-user"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
				<!--  
					<li><a href="#">Profile</a></li>
					<li><a href="#">Mailbox <span class="badge">5</span></a></li>
					<li><a href="#">Job Vacancy</a></li>
					<li><a href="#">Achievement</a></li>
					<li><a href="#">Post</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Feedback</a></li>
					<li><a href="#">DUDI</a></li>
					<li><a href="#">Tracer Study</a></li>
					<li><a href="#">Database</a></li>
					<li><a href="#">User Track</a></li>
					<li><a href="#">Maintenance</a></li>
					-->
					<li role="separator" class="divider"></li>
					<li><a href="<?=base_url("intnog/logout")?>">Logout <i class="icon-signout"></i></a></li>
				</ul>
			</div>

		</div>

	</div>

</header><!-- #header end -->