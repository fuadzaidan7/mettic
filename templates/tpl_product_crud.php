
<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">		

		<div id="colorlib-services" class="">
				<div class="container">

				<div class="row">
					<div id="colorlib-logo"><a href="./index.php?module=home"><img src="images/logo.webp"></a></div>
					<br>
				</div>
				{if $message_type != ""}
				<div class="row">
				{if $message_type == 1}
				<div class="alert alert-success  fade in" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  Adding new product successful.
				</div>
				{elseif $message_type == 2}
				<div class="alert alert-danger" role="alert">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  Error adding new product.
				</div>
				{elseif $message_type == 3}
				<div class="alert alert-success" role="alert">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  Editing existing product successful.
				</div>
				{elseif $message_type == 4}
				<div class="alert alert-danger" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  Error editing product.
				</div>
				{elseif $message_type == 5}
				<div class="alert alert-success" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  Delete product successful.
				</div>
				{elseif $message_type == 6}
				<div class="alert alert-danger" role="alert">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  Error deleting product.
				</div>
				{/if}
				</div>
				{/if}

				<div class="row">
					<a class="btn btn-danger pull-right" href="./index.php?module=logout">
					    Logout
					</a>
					{if empty($product)}
					<button class="btn btn-primary pull-right" type="button" data-toggle="collapse" data-target="#formAdd" aria-expanded="false" aria-controls="formAdd">
					    Add Product
					</button>					
					{else}
						<a class="btn btn-primary pull-right" href="./index.php?module=product_crud&open=1">Add Product</a>
					{/if}
					<br>
					<br>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<td>#</td>
								<td>Product Name</td>
								<td>Action</td>
							</tr>
						</thead>
						{foreach from=$products key=$k item=v}
							<tr>
								<td>{$k+1}</td>
								<td>{$v.product_name}</td>
								<td>
									<a href="./index.php?module=product_crud&product_id={$v.product_id}">Edit</a> | 
									<a href="./index.php?module=product_crud&product_id={$v.product_id}&action=delete">Delete</a>
								</td>
							</tr>
						{/foreach}
					</table>
				</div>

				<div class="row {if empty($product) && $open != 1}collapse{/if}" id="formAdd">
					<hr>
					<br>
										<h3>{if empty($product)}Add{else}Edit{/if} Product</h3>
					<form action="./index.php?module=product_crud" method="POST" enctype="multipart/form-data" id="productForm">
						<input type="hidden" name="action" value="{if empty($product)}AddProduct{else}EditProduct{/if}">
						<input type="hidden" name="product_id" value="{if !empty($product)}{$product.product_id}{/if}">

						<div id="page" style="border : 1px solid #cecece; padding: 10px; border-radius: 5px;">							

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
									   					<div id="product_name_editor" style="text-align: center;">
									   						<h1>#product_name</h1>
									   					</div>									   					
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
											<div class="others-editor" id="main_description" style="min-height: 150px">					
												<p>
													#main_description
												</p>
											</div>
											<br>
											<a class="btn-download" href="javascript:void(0)">
												<i class="far fa-file-pdf" aria-hidden="true"></i>&nbsp;&nbsp;Download Brochure
											</a>
											<br>
											<div id="brochure">	
												<br>
												Brochure:
												{if $product.brochure != ""}									
												<p class="">{$product.brochure}</p>
												{/if}
												<input class="" type="file" name="brochure" value="{if $product.brochure != ''}{$product.brochure}{/if}" {if $product.brochure == ''}required{/if}>
											</div>
										</div>	
										<div class="col-md-6">
											<img class="img-responsive" src="{if $product.product_image != ''}images/{$product.product_image}{else}images/dummy-image.jpg{/if}" style="max-height: 200px; margin:auto;">
											<div class=" id="product_image">
												<br>
												Product image:
												{if $product.product_image != ""}									
												<p class="">{$product.product_image}</p>
												{/if}
												<input class="" type="file" name="product_image" value="{if $product.product_image != ''}{$product.product_image}{/if}" {if $product.product_image == ''}required{/if} >		
											</div>
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
											<img class="img-responsive" src="{if $product.image_1 != ''}images/{$product.image_1}{else}images/dummy-image.jpg{/if}" style="max-height: 200px; margin:auto;">
											<div class=" id="image_1">
												<br>
												Advantage image:
												{if $product.image_1 != ""}									
												<p class="">{$product.image_1}</p>
												{/if}
												<input class="" type="file" name="image_1" value="{if $product.image_1 != ''}{$product.image_1}{/if}" {if $product.image_1 == ''}required{/if} >		
											</div>
										</div>
										<div class="col-md-6 ">
											
											<div class="about animate-box">
												<!-- <h2>Advantages</h2> -->
												<div class="others-editor" id="content_1">
													<p>#content_1</p>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row">
										{for $i=1 to 3}
										
										<div class="col-md-4 animate-box">
											<div class="services">
												<span class="icon">
													{if $i == 1}
													<i class="flaticon-engineering"></i>
													{elseif $i == 2}
													<i class="flaticon-sketch"></i>
													{elseif $i == 3}
													<i class="flaticon-conveyor"></i>
													{/if}
												</span>
												<div class="desc">
													<div class="others-editor" id="title_info_{$i}">
														<h3>#title_info_{$i}</h3>
													</div>
													<div class="others-editor" id="info_{$i}">
														#info_{$i}													
													</div>
												</div>
											</div>
										</div>
										
										{/for}
									</div>
									
								</div>
							</div>
							
							<div id="colorlib-about">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading mb-0">
											<span class="sm">Applications</span>						
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-4 col-md-offset-2 animate-box">
											<div class="others-editor services" id="application_1">
												<p>#application_1</p>
											</div>
										</div>		
										<div class="col-md-4 animate-box">
											<div class="others-editor services" id="application_2">
												<p>#application_2</p>
											</div>
										</div>					
									</div>
								</div>
							</div>							

							<div id="colorlib-about" class="colorlib-light-grey">
								<div class="container">
									<div class="row">
										<div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading mb-0">
											<span class="sm">Product Line</span>						
										</div>
									</div>
									
									<div class="row">
										{for $i=1 to 3}
										
										<div class="col-md-4 animate-box">
											<div class="others-editor services" id="product_line_{$i}">
												<p>#product_line_{$i}	</p>
											</div>
										</div>							
										
										{/for}
									</div>
								</div>
							</div>

							<div id="colorlib-testimony" >
								<div class="container">
									<div class="row">
										<div class="col-md-6 text-justify animate-box ">
											<!-- <span class="sm">Certification</span> -->
											<h2>Certification</h2>											
											<div class="others-editor services" id="certification_desc" style="min-height: 150px">
												<p>#certification_desc</p>
											</div>
										</div>		
										<div class="col-md-5 col-md-offset-1 text-justify animate-box ">
											<!-- <span class="sm">Certification</span> -->
											<h2>&nbsp;</h2>
											<div class="others-editor services" id="download_desc" style="min-height: 100px">
												<p>#download_desc</p>
											</div>											
											<a class="btn-download" href="javascript:void(0)">
												<i class="far fa-file-pdf" aria-hidden="true"></i>&nbsp;&nbsp;Download Brochure
											</a>
											<br>
											<br>												
												{if $product.brochure != ""}									
												Brochure:
												<p class="">{$product.brochure}</p>
												{/if}
										</div>				
									</div>
								</div>
							</div>

						</div>
					  	<br>
						  <button type="submit" class="btn btn-success pull-right">Submit</button>
					</form>		
				</div>
				</div>
			</div>

	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<!-- ckeditor -->
	<!-- <script src="./plugin/ckeditor5-build-classic/ckeditor.js"></script> -->
	<!-- <script src="./plugin/ckeditor5-build-inline/ckeditor.js"></script> -->
	<script src="./plugin/ckeditor5-custom/build/ckeditor.js"></script>

	<script type="text/javascript">
		//hide alert
		setTimeout(function () {
		    $('.alert').fadeOut();
        }, 3000);

        /*ckeditor*/
        /*init for product name only*/
        let editor = [];
        let editor_key = [];

        InlineEditor
        .create( document.querySelector( '#product_name_editor' ),
        {
        	placeholder: ' '
        } )
        .then( newEditor => {
	        editor['product_name_editor'] = newEditor;
	    } )
        .catch( error => {
            console.error( error );
        } );

        /*init for others*/
        $.each( $(".others-editor") , function( i, l ){
		  
		  // console.log($(this).attr('id'))

		  	InlineEditor
	        .create( document.querySelector( '#'+$(this).attr('id') ),
	        {
	        	removePlugins: ['Title']
	        } )
	        .then( newEditor => {
		        editor[$(this).attr('id')] = newEditor;
		        editor_key.push($(this).attr('id'));

		    } )
	        .catch( error => {
	            console.error( error );
	        } );

		});

        /*end ckeditor*/
        
        /*form ajax*/
        $("#productForm").submit(function(e) {

		    e.preventDefault(); // avoid to execute the actual submit of the form.

		    var form = $(this);
		    var actionUrl = form.attr('action');		   		    

		    // console.log(editor);

		    $.each(editor_key, function(index,value){
		    	console.log(editor[value].getData());
		    });

		    /*$.ajax({
		        type: "POST",
		        url: actionUrl,
		        data: form.serialize(), // serializes the form's elements.
		        success: function(data)
		        {
		          alert(data); // show response from the php script.
		        }
		    });*/
		    
		});
	</script>
</body>

