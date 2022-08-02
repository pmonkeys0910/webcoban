<div id="tren">
	<div id="top_header001">
		<div class="top"></div>
		<div class="mid">
			<div class="left">
				<div class="left1"></div>
				<ul class="root">
					<li>
						<span>
							<img class="top_header" src="icon/768px-Red_Phone_Font-Awesome1.svg.png">
							<a href="#" class="top_header">0326-226-141</a>
						</span>
					</li>
					<li>
						<span>
							<img class="top_header" src="icon/mail-32.png">
							<a class="top_header">tranvanphuc@gmail.com</a>
						</span>
					</li>
					<li>
						<span>
							<img class="top_header" src="icon/pngfind.com-marker-png-731704.png">
							<a class="top_header">1734 Stonecoal Road</a>
						</span>
					</li>
				</ul>
			</div>
			<div class="right">
				<div class="right1"></div>
				<ul class="root">
					<li>
						<span>
							<img class="top_header" src="icon/pngfind.com-money-sign-png-519391.png">
							<a class="top_header">USD</a>
						</span>
					</li>
					<li>
						<span>
							<img class="top_header" src="icon/usericon.png">
							<a class="top_header">
								My Account
							</a>						
						</span>
						<ul class="sub_menu">
							<li>
								<a href="index.php">
									Home page
								</a>
							</li>
							<li class="menu-user" style="<?php if(empty($_SESSION['id'])) { ?>display: none; <?php } ?>">
								<a href="view_cart.php">
									Cart
								</a>
							</li>
								<li class="menu-guest" style="<?php if(!empty($_SESSION['id'])) { ?>display: none; <?php } ?>">
									<button class="menu-button" type="button" data-toggle="modal" data-target="#modal-signin">
										Sign in
									</button>
								</li>
								<li class="menu-guest" style="<?php if(!empty($_SESSION['id'])) { ?>display: none; <?php } ?>">
									<button class="menu-button" type="button" data-toggle="modal" data-target="#modal-signup">
										Sign up
									</button>
								</li>
								<li class="menu-user" style="<?php if(empty($_SESSION['id'])) { ?>display: none; <?php } ?>">
									<a href="signout.php">
										Sign out
									</a>
								</li>
						</ul>	
					</li>
				</ul>
			</div>	
		</div>
	</div>
	<div id="header001">
		<div class="top"></div>
		<div class="mid">
			<div class="left"></div>
			<div class="logo">
				<span>
					<img src="icon/logo.webp">
				</span>
			</div>
			<div class="search_bar1"></div>
			<div class="search_bar">
				<form>
					<?php 
					$search = '';
					if (isset($_GET['search'])) {
						$search = $_GET['search'];
					} ?>
					<input type="search" placeholder="Search..." name="search" value="<?php echo $search ?>">
					<button type="submit">Search</button>
				</form>
			</div>
			<div class="cart">
				<div class="cart_1">
					<a class="header" href="view_cart.php">
						<img class="header" src="icon/cart-8-48.png">
					</a>
				</div>
				<div class="cart_2">	
					<a class="header" href="view_cart.php">
						Your cart
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="red_line"></div>
	<?php
		if(empty($_SESSION['id'])) {
			include'signup.php';
			include'signin.php';
		} 
	?>
</div>