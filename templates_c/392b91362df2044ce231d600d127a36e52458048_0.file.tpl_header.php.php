<?php
/* Smarty version 4.0.0, created on 2022-01-12 03:39:20
  from 'C:\xampp\htdocs\mettic\templates\tpl_header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61de3f589180f9_17881586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392b91362df2044ce231d600d127a36e52458048' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_header.php',
      1 => 1641955157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61de3f589180f9_17881586 (Smarty_Internal_Template $_smarty_tpl) {
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
									<li ></li>
									<li class="has-dropdown <?php if ($_smarty_tpl->tpl_vars['module']->value == 'products' || $_smarty_tpl->tpl_vars['module']->value == 'product') {?>active<?php }?>">
									<a href="./index.php?module=products">Products</a>
										<ul class="dropdown">
											<!-- <li><a href="./index.php?module=product&product_id=1">Sample 1</a></li> -->
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
											<li <?php if ($_smarty_tpl->tpl_vars['module']->value == 'product') {?>class="active"<?php }?>><a href="./index.php?module=product&product_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['product_name'];?>
</a></li>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</li>
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
