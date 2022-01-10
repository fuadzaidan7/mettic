<nav class="colorlib-nav" role="navigation">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-2">
								<div id="colorlib-logo"><a href="./index.php?module=home"><img src="images/logo.webp"></a></div>
							</div>
							<div class="col-xs-10 text-right menu-1">
								<ul>
									<li {if $module == 'home'}class="active"{/if}><a href="./index.php?module=home">Home</a></li>
									<li {if $module == 'about'}class="active"{/if}><a href="./index.php?module=about">About</a></li>
									<li {if $module == 'services'}class="active"{/if}><a href="./index.php?module=services">Products</a></li>
									<li {if $module == 'contact'}class="active"{/if}><a href="./index.php?module=contact">Contact</a></li>
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
			</nav>