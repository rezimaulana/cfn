<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Top Bar
============================================= -->
<div id="top-bar" class="dark">

	<div class="container-fullwidth clearfix">

		<div class="col_half nobottommargin">

			<!-- Top Links
			============================================= -->
			<div class="top-links">
				<ul>
					<li><a href="#"><?php echo $this->session->userdata("lang"); ?></a>
						<ul>
							<li><a href="<?=base_url("en/")?>"><img src="<?=base_url("images/icons/flags/usa.png")?>" alt="EN"> English</a></li>
							<li><a href="<?=base_url("id/")?>"><img src="<?=base_url("images/icons/flags/indonesia.png")?>" alt="ID"> Bahasa</a></li>
						</ul>
					</li>
					<li><a href="<?=base_url("intnog/default_redirect")?>"><?=$this->lang->line('top_bar-account');?></a></li>
					<li class="<?php echo ($this->session->userdata('id_user')!='') ? 'hidden' : ''; ?>"><a href="<?=base_url("logreg/login")?>"><?=$this->lang->line('top_bar-login');?></a></li>
					<li class="<?php echo ($this->session->userdata('id_user')!='') ? 'hidden' : ''; ?>"><a href="<?=base_url("logreg/regpu")?>"><?=$this->lang->line('top_bar-register');?></a></li>
					<li class="<?php echo ($this->session->userdata('l_lvl')=='121096') ? '' : 'hidden'; ?>"><a href="<?=base_url("fiucontrol/root_back_user")?>"><?=$this->lang->line('top_bar-root');?></a></li>
				</ul>
			</div><!-- .top-links end -->

		</div>

		<div class="col_half fright col_last nobottommargin hidden-xs">

			<!-- Top Links
			============================================= -->
			<div class="top-links">
				<ul>
					<li><a href="<?=base_url()?>"><?=$this->lang->line('top_bar-home');?></a></li>
					<li><a href="<?=base_url()?>"><?=$this->lang->line('top_bar-contact');?></a></li>
					<li><a href="<?=base_url("information")?>"><?=$this->lang->line('top_bar-faqs');?></a></li>
					<li><a href="<?=base_url("information")?>"><?=$this->lang->line('top_bar-feedback');?></a></li>
				</ul>
			</div><!-- .top-links end -->

		</div>

	</div>

</div><!-- #top-bar end -->