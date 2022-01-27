<?php
/* Smarty version 4.0.0, created on 2022-01-26 08:02:55
  from 'C:\xampp\htdocs\mettic\templates\tpl_login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61f0f21f35b921_05920924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c739fa358dba411afdc6bfe1adbc9aa233e241e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_login.php',
      1 => 1643180574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f0f21f35b921_05920924 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
	.container{
		position: absolute;
    top: 50%;
    left: 50%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
	}

	body{
		background-color: #fafafa;
	}
	.panel{
		box-shadow: -2px -2px 0px 1px rgb(247 148 30);
	}

	.panel-body {
	    padding: 30px;
	}
</style>
<body >
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
				  <div class="panel-body">
				  	
					<div class="text-center">
							<br>
						<div id="colorlib-logo"><a href="./index.php?module=home"><img src="images/logo.webp"></a></div>
						<br><br>
						<h1>Login</h1>
						  <form action="./index.php?module=login" method="POST" enctype="multipart/form-data">

						  	<input type="hidden" name="action" value="AuthUser">

							<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off"><br>
							<input  class="form-control" type="password" name="pass" placeholder="Password">
							<span style="color: red"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</span>
							<br>
							<input class="btn btn-primary pull-right" type="submit" name="login" class="login loginmodal-submit" value="Login">
							<br><br>
						  </form>											  
					</div>
			
				  </div>
				</div>
			</div>
			
		</div>
	</div>
</body><?php }
}
