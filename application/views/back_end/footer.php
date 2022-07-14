<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Footer
============================================= -->
<footer id="footer" class="dark">

	<!-- Copyrights
	============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half">
				<img src="<?= base_url("images/footer-logo.png") ?>" alt="" class="footer-logo">

				&copy; <?php echo date("Y "); ?><?=$this->lang->line('footer-copyr');?>
			</div>

			<div class="col_half col_last tright">
				<div class="copyrights-menu copyright-links fright clearfix">
					<a href="#">LINK1</a>|
					<a href="#">LINK2</a>|
					<a href="#">LINK3</a>|
					<a href="#">LINK4</a>|
					<a href="#">LINK5</a>
				</div>
				<div class="copyrights-menu fright clearfix">
					<a href="#" class="social-icon si-rounded si-small si-colored si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="#" class="social-icon si-rounded si-small si-colored si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="#" class="social-icon si-rounded si-small si-colored si-gplus">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>

					<a href="#" class="social-icon si-rounded si-small si-colored si-github">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="#" class="social-icon si-rounded si-small si-colored si-yahoo">
						<i class="icon-yahoo"></i>
						<i class="icon-yahoo"></i>
					</a>

					<a href="#" class="social-icon si-rounded si-small si-colored si-linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>
				</div>
			</div>

		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->