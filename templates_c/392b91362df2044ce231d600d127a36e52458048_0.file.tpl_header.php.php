<?php
/* Smarty version 4.0.0, created on 2022-01-10 03:11:52
  from 'C:\xampp\htdocs\mettic\templates\tpl_header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61db95e82ef410_48081006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392b91362df2044ce231d600d127a36e52458048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_header.php',
      1 => 1641780710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61db95e82ef410_48081006 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="colorlib-nav" role="navigation">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-2">
								<div id="colorlib-logo"><a href="./index.php?module=home"><img src="images/logo.webp"></a></div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul>
									<li <?php if ($_smarty_tpl->tpl_vars['module']->value == 'home') {?>class="active"<?php }?>><a href="./index.php?module=home">Home</a></li>
									<li <?php if ($_smarty_tpl->tpl_vars['module']->value == 'about') {?>class="active"<?php }?>><a href="./index.php?module=about">About</a></li>
									<li <?php if ($_smarty_tpl->tpl_vars['module']->value == 'services') {?>class="active"<?php }?>><a href="./index.php?module=services">Products</a></li>
									<li <?php if ($_smarty_tpl->tpl_vars['module']->value == 'contact') {?>class="active"<?php }?>><a href="./index.php?module=contact">Contact</a></li>
									<!-- <li class="has-dropdown">
										<a href="./index.php?module=work">Projects</a>
										<ul class="dropdown">
											<li><a href="#">Commercial</a></li>
											<li><a href="#">Apartment</a></li>
											<li><a href="#">House</a></li>
											<li><a href="#">Building</a></li>
										</ul>
									</li>
									
									<li><a href="./index.php?module=blog">Blog</a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav><?php }
}
