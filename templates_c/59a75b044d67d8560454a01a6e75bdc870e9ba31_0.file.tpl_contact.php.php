<?php
/* Smarty version 4.0.0, created on 2022-01-10 03:10:23
  from 'C:\xampp\htdocs\mettic\templates\tpl_contact.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61db958f12a247_28764782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59a75b044d67d8560454a01a6e75bdc870e9ba31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_contact.php',
      1 => 1641780621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61db958f12a247_28764782 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<body>
		
		<div class="colorlib-loader"></div>

		<div id="page">
			
			<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

			
			<aside id="colorlib-hero">
				<div class="flexslider">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_4.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
					   				<div class="slider-text-inner text-center">
					   					<h2>Get in Touch</h2>
					   					<h1>Contact Us</h1>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>

			<div id="colorlib-contact">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 animate-box">
							<h2>Contact Information</h2>
							<div class="row contact-info-wrap">
								<div class="col-md-3">
									<p><span><i class="icon-location-2"></i></span><br>Star Avenue Commercial Center,</br>18-02, Jalan Zuhal U5/178, Seksyen U5,</br>40150 Shah Alam, Selangor DE</p>
								</div>
								<div class="col-md-3">
									<p><span><i class="icon-phone3"></i></span><br><a href="tel://601136051024">+6011 3605 1024</a></p>
								</div>
								<div class="col-md-3">
									<p><span><i class="icon-paperplane"></i></span><br><a href="mailto:enquiry@metticsysteme.com">enquiry@metticsysteme.com</a></p>
								</div>
								<div class="col-md-3">
									<p><span><i class="icon-globe"></i></span><br><a href="#">metticsysteme.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-10 col-md-offset-1 animate-box">
							<h2>Get In Touch</h2>
							<form action="#">
								<div class="row form-group">
									<div class="col-md-6">
										<label for="fname">First Name</label>
										<input type="text" id="fname" class="form-control" placeholder="Your firstname">
									</div>
									<div class="col-md-6">
										<label for="lname">Last Name</label>
										<input type="text" id="lname" class="form-control" placeholder="Your lastname">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" class="form-control" placeholder="Your email address">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="subject">Subject</label>
										<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Message</label>
										<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" value="Send Message" class="btn btn-primary">
								</div>

							</form>		
						</div>
					</div>
				</div>
			</div>
			<div id="map" class="colorlib-map"></div>
			<div id="colorlib-subscribe">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 colorlib-heading animate-box">
							<h2>Sign up for a Newsletter</h2>
							<div class="row">
								<div class="col-md-7">
									<p>Enter your email address to get the latest news, events and special offers delivered right to your inbox.</p>
								</div>
								<div class="col-md-5">
									<form class="form-inline qbstp-header-subscribe">
										<div class="row">
											<div class="col-md-12 col-md-offset-0">
												<div class="form-group">
													<input type="text" class="form-control" id="email" placeholder="Enter your email">
													<button type="submit" class="btn btn-primary">Subscribe</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>
		
		<!-- jQuery -->
		<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
		<!-- jQuery Easing -->
		<?php echo '<script'; ?>
 src="js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>
		<!-- Bootstrap -->
		<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<!-- Waypoints -->
		<?php echo '<script'; ?>
 src="js/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
		<!-- Stellar Parallax -->
		<?php echo '<script'; ?>
 src="js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
		<!-- Flexslider -->
		<?php echo '<script'; ?>
 src="js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
		<!-- Owl carousel -->
		<?php echo '<script'; ?>
 src="js/owl.carousel.min.js"><?php echo '</script'; ?>
>
		<!-- Magnific Popup -->
		<?php echo '<script'; ?>
 src="js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/magnific-popup-options.js"><?php echo '</script'; ?>
>
		<!-- Counters -->
		<?php echo '<script'; ?>
 src="js/jquery.countTo.js"><?php echo '</script'; ?>
>
		<!-- Google Map -->
		<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/google_map.js"><?php echo '</script'; ?>
>

		<!-- Main -->
		<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

	</body>


<?php }
}
