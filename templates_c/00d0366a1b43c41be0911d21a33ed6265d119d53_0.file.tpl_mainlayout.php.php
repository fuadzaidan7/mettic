<?php
/* Smarty version 4.0.0, created on 2022-01-21 22:05:35
  from 'C:\xampp\htdocs\mettic\templates\tpl_mainlayout.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61eb201f292c96_39857253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d0366a1b43c41be0911d21a33ed6265d119d53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_mainlayout.php',
      1 => 1642799134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61eb201f292c96_39857253 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Mettic Systeme</title>
		<link rel="icon" href="images/ms.ico" type="image/icon type">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />

	  <!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
		
		<!-- font awesome -->
		<link href="./plugin/fontawesome-5.15.4/css/all.css" rel="stylesheet">

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="css/flexslider.css">

		<!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		
		<!-- Flaticons  -->
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<?php echo '<script'; ?>
 src="js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->

	</head>

	<?php echo $_smarty_tpl->tpl_vars['body']->value;?>


	</html><?php }
}
