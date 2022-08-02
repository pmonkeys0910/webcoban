
<?php 
	require 'admin/connect.php';
	$sql = "select * from products";
	$result = mysqli_query($connect,$sql);
?>
<div id="giua">
	<div id="banner001">
		<div class="left"></div>
		<div class="head_phone">
			<img src="icon/Headphone-PNG-image8png.png">
		</div>
		<div class="mid">
			<div class="top"></div>
			<div class="time">
				<div class="day">
					<div id="num001">03</div>
					<div id="unit001">DAYS</div>
				</div>
				<div class="hour">
					<div id="num001">10</div>
					<div id="unit001">HOURS</div>
				</div>
				<div class="min">
					<div id="num001">34</div>
					<div id="unit001">MINS</div>
				</div>
				<div class="sec">
					<div id="num001">60</div>
					<div id="unit001">SECS</div>
				</div>
			</div>
			<div class="slogan001">
				<p>SUMMERS ON SALE</p>
				<p>UP TO 50% OFF</p>
			</div>
			<div class="buy">
				<div class="left">
				</div>
				<div class="shop_now">
					<p class="p001">SHOP NOW</p>
				</div>
			</div>
		</div>
		<div class="laptop">
			<img src="icon/kisspng-laptop-display-device-multimedia-laptop-mockup-5b2f1c00541724.2441362915298140163445.png">
		</div>
		<div class="right"></div>
	</div>
	<div id="products001">
		<div id="left"></div>
		<div id="mid">
			<div class="mid1">
				<?php 
					$page = 1;
					if (isset($_GET['page'])) {
						$page = $_GET['page'];
					}
					$sql_num_products = "select count(*) from products where name like '%$search%'";
					$array_num_products = mysqli_query($connect,$sql_num_products);
					$result_num_products = mysqli_fetch_array($array_num_products);
					$num_products = $result_num_products['count(*)'];
					$products_per_page = 20;
					$pages = ceil($num_products/ $products_per_page);
					$skip = $products_per_page * ($page - 1);
					$sql = "select * from products
					where
					name like '%$search%'
					limit $products_per_page offset $skip";
					$result = mysqli_query($connect,$sql);
					foreach ($result as $each): ?>
						<div class="product">
							<div class="img">
								<a class="product_detail" href="product.php?id=<?php echo $each['id'] ?>">
									<img class="product_img" src="admin/products/photo/<?php echo$each['photo'] ?>">
								</a>
							</div>
							<div class="name_price">
								<div class="product_name">
									<a class="product_detail" href="product.php?id=<?php echo $each['id'] ?>">
										<?php echo $each['name'] ?>	
									</a>	
								</div>
								<div class="product_price">
									<p><?php echo $each['price'] ?>$</p>
								</div>
							</div>
							
							<div class="product_add_to_cart" <?php if(empty($_SESSION['id'])) { ?> style="display: none;" <?php } ?>>
								<a data-id='<?php echo $each['id'] ?>' class="span-cart" >
								<div class="button_add_to_cart">
									<img class="cart" src="icon/cart-8-48.png">
									<span class="add_to_cart">Add to cart</span>
								</div>
								</a>
							</div>						
						</div>
					<?php endforeach?>
				</div>
				<div class="page">	
					<?php for ($i = 1; $i <= $pages; $i++){ ?>
						<a class="page" href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
							<?php echo $i ?>
						</a>
					<?php } ?>
					<?php mysqli_close($connect) ?>
				</div>
		</div>
		<div id="right"></div>
	</div>
	
	
</div>