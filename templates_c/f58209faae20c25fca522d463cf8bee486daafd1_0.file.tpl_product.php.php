<?php
/* Smarty version 4.0.0, created on 2022-01-25 07:50:50
  from 'C:\xampp\htdocs\mettic\templates\tpl_product.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61ef9dca97a812_03571967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58209faae20c25fca522d463cf8bee486daafd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_product.php',
      1 => 1643093448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ef9dca97a812_03571967 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">

		<?php echo $_smarty_tpl->tpl_vars['header']->value;?>


		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>METTIC SYSTEME</h2>
				   					<h1><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-services" class="">
				<div class="container">
				<div class="row">
					
					<div class="col-md-6 colorlib-heading animate-box">						
						<p>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['main_desc'];?>

						</p>
						<br>
						<a class="btn-download" target="__blank" href="./brochure/<?php echo $_smarty_tpl->tpl_vars['product']->value['brochure'];?>
">
							<i class="far fa-file-pdf" aria-hidden="true"></i>&nbsp;&nbsp;Download Brochure
						</a>
					</div>	
					<div class="col-md-6">
						<img class="img-responsive" src="images/<?php echo $_smarty_tpl->tpl_vars['product']->value['product_image'];?>
" >
					</div>				
				</div>
				</div>
			</div>

		<div id="colorlib-about" class="colorlib-light-grey">
			<div class="container">				
				<div class="row row-pb-lg">
					<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading animate-box mb-0">
						<span class="sm">Advantages</span>	
						<br>						
					</div>					
					<div class="col-md-6">
						<img class="img-responsive" src="images/<?php echo $_smarty_tpl->tpl_vars['product']->value['image_1'];?>
" alt="Free HTML5 Bootstrap Template by colorlib.com">
					</div>
					<div class="col-md-6 ">
						
						<div class="about animate-box">
							<!-- <h2>Advantages</h2> -->
							<p><?php echo $_smarty_tpl->tpl_vars['product']->value['content_1'];?>
</p>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['title_info_1'] != '') {?>
				<div class="row">
					<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value["title_info_".((string)$_smarty_tpl->tpl_vars['i']->value)] != '') {?>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon">
								<?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>
								<i class="flaticon-engineering"></i>
								<?php } elseif ($_smarty_tpl->tpl_vars['i']->value == 2) {?>
								<i class="flaticon-sketch"></i>
								<?php } elseif ($_smarty_tpl->tpl_vars['i']->value == 3) {?>
								<i class="flaticon-conveyor"></i>
								<?php }?>
							</span>
							<div class="desc">
								<h3><?php echo $_smarty_tpl->tpl_vars['product']->value["title_info_".((string)$_smarty_tpl->tpl_vars['i']->value)];?>
</h3>
								<?php echo $_smarty_tpl->tpl_vars['product']->value["info_".((string)$_smarty_tpl->tpl_vars['i']->value)];?>
													
							</div>
						</div>
					</div>
					<?php }?>
					<?php }
}
?>
				</div>
				<?php }?>
			</div>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['product']->value['application_1'] != '') {?>
		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading mb-0">
						<span class="sm">Applications</span>						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-4 col-md-offset-2 animate-box">
						<div class="services">								
							<?php echo $_smarty_tpl->tpl_vars['product']->value['application_1'];?>

						</div>
					</div>		
					<div class="col-md-4 animate-box">
						<div class="services">								
							<?php echo $_smarty_tpl->tpl_vars['product']->value['application_2'];?>

						</div>
					</div>					
				</div>
			</div>
		</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['product']->value['product_line_1'] != '') {?>	
		<div id="colorlib-about" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading mb-0">
						<span class="sm">Product Line</span>						
					</div>
				</div>
				
				<div class="row">
					<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value["product_line_".((string)$_smarty_tpl->tpl_vars['i']->value)] != '') {?>
					<div class="col-md-4 <?php if ($_smarty_tpl->tpl_vars['i']->value == 1 && $_smarty_tpl->tpl_vars['product']->value['product_line_3'] == '') {?>col-md-offset-2<?php }?> animate-box">
						<div class="services">								
							<?php echo $_smarty_tpl->tpl_vars['product']->value["product_line_".((string)$_smarty_tpl->tpl_vars['i']->value)];?>
							
						</div>
					</div>							
					<?php }?>
					<?php }
}
?>
				</div>
			</div>
		</div>
		<?php }?>

		<div id="colorlib-testimony" >
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-justify animate-box ">
						<!-- <span class="sm">Certification</span> -->
						<h2>Certification</h2>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['certification_desc'];?>

						</p>
					</div>		
					<div class="col-md-5 col-md-offset-1 text-justify animate-box ">
						<!-- <span class="sm">Certification</span> -->
						<h2>&nbsp;</h2>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['download_desc'];?>

						</p>
						<br>
						<a class="btn-download" target="__blank" href="./brochure/<?php echo $_smarty_tpl->tpl_vars['product']->value['brochure'];?>
">
							<i class="far fa-file-pdf" aria-hidden="true"></i>&nbsp;&nbsp;Download Brochure
						</a>
					</div>				
				</div>
			</div>
		</div>

	
		<!-- <div id="colorlib-subscribe">
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
		</div> -->

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
	<!-- Main -->
	<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

</body>

<?php }
}
