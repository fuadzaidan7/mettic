<?php
/* Smarty version 4.0.0, created on 2022-01-24 12:17:35
  from 'C:\xampp\htdocs\mettic\templates\tpl_addproduct.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61ee8acf163435_94574380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e61c204e2ed7199ef2ca5eb20d4130082144ef6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mettic\\templates\\tpl_addproduct.php',
      1 => 1643023027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ee8acf163435_94574380 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">		

		<div id="colorlib-services" class="">
				<div class="container">
				<div class="row">
					<div id="colorlib-logo"><a href="./index.php?module=home"><img src="images/logo.webp"></a></div>
					<br>
					<h3>Add Product</h3>
					<form action="./index.php?module=product" method="POST">
						<input type="hidden" name="action" value="<?php if (empty($_smarty_tpl->tpl_vars['product']->value)) {?>AddProduct<?php } else { ?>EditProduct<?php }?>">
						<input type="hidden" name="product_id" value="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value)) {
echo $_smarty_tpl->tpl_vars['product']->value['product_id'];
}?>">

						<div class="form-group">
						    <label for="">Product Name</label>		
						    <div class="row">						    	  
							    <div class="col-md-8 ">				    					    
								    <input class="form-control" name="product_name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
" placeholder="#product name" maxlength="50">
								    <small id="" class="form-text text-muted">50 maximum characters</small>
								</div>
							</div>
						</div>
						<div class="form-group">
						    <label for="">Short Description</label>			
						    <div class="row">						    	  
							    <div class="col-md-8 ">			    					    
								    <input class="form-control" name="product_name" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['short_desc'];?>
" placeholder="#short description" maxlength="30">
								    <small id="" class="form-text text-muted">30 maximum characters. To use in Products page.</small>
								</div>
							</div>
						</div>
						<div class="form-group">
						    <label for="">Product Image</label>	
						    <div class="row">						    	  
							    <div class="col-md-3 ">							    	
									<input class="form-control" type="file">
									<?php if ($_smarty_tpl->tpl_vars['product']->value['product_image'] != '') {?>
									<img src="./images/<?php echo $_smarty_tpl->tpl_vars['product']->value['product_image'];?>
">
									<p><?php echo $_smarty_tpl->tpl_vars['product']->value['product_image'];?>
</p>
									<?php }?>
							    </div>   
						    </div>		
						</div>
						<div class="form-group">
						    <label for="">Main Description</label>	
						    <div class="row">
						    	<div class="col-md-8 ">
								  	<textarea class="form-control main-desc-editor" name="main_desc" placeholder="#main description">
								  		<?php echo $_smarty_tpl->tpl_vars['product']->value['main_desc'];?>

								  	</textarea>									  					    	
							    </div>   								     
						    </div>		
						</div>
						<div class="form-group">
						    <label for="">Brochure</label>	
						    <div class="row">	
							    <div class="col-md-3 ">
							    	<input class="form-control" type="file" name="brochure">
							    	<?php if ($_smarty_tpl->tpl_vars['product']->value['brochure'] != '') {?>
									<a href="./images/<?php echo $_smarty_tpl->tpl_vars['product']->value['brochure'];?>
" target="__blank"><?php echo $_smarty_tpl->tpl_vars['product']->value['brochure'];?>
</a>
									<?php }?>					    	
							    </div>    		
						    </div>			    						    
						</div>					
						<div class="form-group">
						    <label for="">Advantages, Image & Informations</label>	
						    <div class="row">
						    	<div class="col-md-8 ">
								  	<textarea class="form-control advantages-editor" name="main_desc" placeholder="#advantages content"><?php echo $_smarty_tpl->tpl_vars['product']->value['content_1'];?>
</textarea>									  					    	
							    </div>   							
							    <div class="col-md-4 ">							    	
									<input class="form-control" type="file">
									<?php if ($_smarty_tpl->tpl_vars['product']->value['image_1'] != '') {?>
									<img src="./images/<?php echo $_smarty_tpl->tpl_vars['product']->value['image_1'];?>
">
									<p><?php echo $_smarty_tpl->tpl_vars['product']->value['image_1'];?>
</p>
									<?php }?>
							    </div>  	     
						    </div>		
						    <div class="row">
						    	<br>
						    	<div class="col-md-4 ">
						    		<input class="form-control" type="text" name="title_1" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['title_info_1'];?>
" placeholder="#title advantages info 1">
						    		<br>
								  	<textarea class="form-control advantages-info1-editor" name="info_1" placeholder="#advantages info 1"><?php echo $_smarty_tpl->tpl_vars['product']->value['info_1'];?>
</textarea>									  					    	
							    </div>   

							    <div class="col-md-4 ">
							    	<input class="form-control" type="text" name="title_info_2" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['title_info_2'];?>
" placeholder="#title advantages info 2">
						    		<br>
								  	<textarea class="form-control advantages-info2-editor" name="info_2" placeholder="#advantages info 2"><?php echo $_smarty_tpl->tpl_vars['product']->value['info_2'];?>
</textarea>									  					    	
							    </div>
							    <div class="col-md-4 ">
							    	<input class="form-control" type="text" name="title_info_3" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['title_info_3'];?>
" placeholder="#title advantages info 3">
						    		<br>
								  	<textarea class="form-control advantages-info3-editor" name="info_3" placeholder="#advantages info 3"><?php echo $_smarty_tpl->tpl_vars['product']->value['info_3'];?>
</textarea>									  					    	
							    </div>								     
						    </div>
						</div>  	
						<div class="form-group">
						    <label for="">Applications</label>	
						    <div class="row">
						    	<div class="col-md-4 ">
								  	<textarea class="form-control application1-editor" name="application_1" placeholder="#application content"><?php echo $_smarty_tpl->tpl_vars['product']->value['application_1'];?>
</textarea>									  					    	
							    </div>   								     
							    <div class="col-md-4 ">
								  	<textarea class="form-control application2-editor" name="application_2" placeholder="#application content"><?php echo $_smarty_tpl->tpl_vars['product']->value['application_2'];?>
</textarea>									  					    	
							    </div>
						    </div>	
						</div>

						<div class="form-group">
						    <label for="">Product Line</label>	
						    <div class="row">
						    	<div class="col-md-4 ">
								  	<textarea class="form-control productline1-editor" name="product_line_1" placeholder="#product line content"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_line_1'];?>
</textarea>									  					    	
							    </div>   								     
							    <div class="col-md-4 ">
								  	<textarea class="form-control productline2-editor" name="product_line_2" placeholder="#product line content"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_line_2'];?>
</textarea>									  					    	
							    </div>
							    <div class="col-md-4 ">
								  	<textarea class="form-control productline3-editor" name="product_line_3" placeholder="#product line content"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_line_3'];?>
</textarea>									  					    	
							    </div>
						    </div>	
						</div>

						<div class="form-group">
						    <label for="">Certification Description</label>	
						    <div class="row">
						    	<div class="col-md-8 ">
								  	<textarea class="form-control certification-editor" name="certification_desc" placeholder="#certification description"><?php echo $_smarty_tpl->tpl_vars['product']->value['certification_desc'];?>
</textarea>									  					    	
							    </div>  
						    </div>	
						</div>

						<div class="form-group">
						    <label for="">Download Description</label>	
						    <div class="row">
						    	<div class="col-md-8 ">
								  	<textarea class="form-control download-editor" name="download_desc" placeholder="#download description"><?php echo $_smarty_tpl->tpl_vars['product']->value['download_desc'];?>
</textarea>									  					    	
							    </div>  
						    </div>	
						</div>

					  	
						  <button type="submit" class="btn btn-primary">Submit</button>
					</form>		
				</div>
				</div>
			</div>

	
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

	<!-- ckeditor -->
	<?php echo '<script'; ?>
 src="./plugin/ckeditor5-build-classic/ckeditor.js"><?php echo '</script'; ?>
>
	<!-- <?php echo '<script'; ?>
 src="./plugin/ckeditor5-build-inline/ckeditor.js"><?php echo '</script'; ?>
> -->

	<?php echo '<script'; ?>
 type="text/javascript">
		

        ClassicEditor
        .create( document.querySelector( '.main-desc-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.advantages-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.advantages-info1-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.advantages-info2-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.advantages-info3-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.application1-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.application2-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.productline1-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.productline2-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.productline3-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.certification-editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '.download-editor' ) )
        .catch( error => {
            console.error( error );
        } );
	<?php echo '</script'; ?>
>
</body>

<?php }
}
