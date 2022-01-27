<?php
/* Smarty version 4.0.0, created on 2022-01-25 07:56:06
  from 'C:\xampp\htdocs\mettic\templates\tpl_products.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61ef9f062a7016_17953539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9221a05da03c35386dfa6adc4a10b7c170d0dd07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_products.php',
      1 => 1643093762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ef9f062a7016_17953539 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<body>
			
		<div class="colorlib-loader"></div>

		<div id="page">
			
			<?php echo $_smarty_tpl->tpl_vars['header']->value;?>

			
			<aside id="colorlib-hero">
				<div class="flexslider">
					<ul class="slides">
				   	<li style="background-image: url(images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
					   				<div class="slider-text-inner text-center">
					   					<h2>METTIC SYSTEME</h2>
					   					<h1>Our Products</h1>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>

			<div id="colorlib-services" class="pb-0">
				<div class="container">
				<div class="row">
					<div class="col-md-6 colorlib-heading animate-box">						
						<p>
							Mettic Systeme provides a wide range of construction materials and construction chemicals. The harmonized product range allows the easy selection as well as ideal combination and processing of individual construction materials.
						</p>
						<p>
							Thanks to versatile fields of application such as commercial and residential buildings, bridges, power plants, marine engineering, railways, the proper function of project site can be ensured in the long run by the use of our product systems
						</p>
					</div>
					<div class="col-md-5 col-md-offset-1 colorlib-heading animate-box">						
						
						<img class="img-responsive" src="images/img_bg_4.jpg" alt="Free HTML5 Bootstrap Template by colorlib.com">
					</div>
				</div>
				</div>
			</div>

			<div id="colorlib-services">
				<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading animate-box">
						<span class="sm">OUR PRODUCTS</span>
						<h2><span class="thin">Our Proprietary</span> <span class="thick"> Engineering Products</span></h2>
						<p>Thanks to versatile fields of application such as commercial and residential buildings, bridges, power plants, marine engineering, railways, the proper function of project site can be ensured in the long run by the use of our product systems</p>
					</div>
				</div>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
						<div class="col-md-4 text-center animate-box">
							<div class="staff" class="staff-img" style="background-image: url(images/<?php echo $_smarty_tpl->tpl_vars['v']->value['product_image'];?>
);">
								<a href="./index.php?module=product&product_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['product_id'];?>
" class="desc">
									<h3><?php echo $_smarty_tpl->tpl_vars['v']->value['product_name'];?>
</h3>
									<span>learn more</span>
									<div class="parag">
										<p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['v']->value['short_desc'];?>
</p>
									</div>
								</a>
							</div>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
					</div>					
				</div>
			</div>

			<div id="colorlib-testimony" class="colorlib-light-grey">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box colorlib-heading animate-box">
							<span class="sm">Testimonial</span>
							<h2><span class="thin">What Our</span> <span class="thick">Client Says</span></h2>
						</div>
						<div class="col-md-7 col-md-push-1">
							<div class="row animate-box">
								<span class="icon"><i class="icon-quotes-left"></i></span>
								<div class="owl-carousel1">
									<div class="item">
										<div class="testimony-slide active">
											<div class="testimony-wrap">
												<figure>
													<img src="images/person1.jpg" alt="user">
												</figure>
												<blockquote>
													<span>Andrew Field</span>
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active">
											<div class="testimony-wrap">
												<figure>
													<img src="images/person2.jpg" alt="user">
												</figure>
												<blockquote>
													<span>Mark Bubble</span>
													<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active">
											<div class="testimony-wrap">
												<figure>
													<img src="images/person3.jpg" alt="user">
												</figure>
												<blockquote>
													<span>Adam Smith</span>
													<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		
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
		<!-- Main -->
		<?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>

	</body>


<?php }
}
