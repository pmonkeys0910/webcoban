<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		* {
			padding: 0px;
			margin: 0px;
		}
		#header_cart {
			width: 100%;
			background-color: black;
			height: 135px;
			float: left;
		}
		#cart {
			width: 100%;
			height: 1300px;
			float: left;
			background-color: white;
		}
		a {
			color: red;
			text-decoration: none;
		}
		#left {
			width: 8%;
			height: 100%;
			float: left;
			background-color: rgb(230, 230, 230);
		}
		#right {
			width: 8%;
			height: 100%;
			float: left;
			background-color: rgb(230, 230, 230);
		}
		#mid {
			width: 84%;
			height: 100%;
			float: left;
		}
		#my_cart {
			width: 100%;
			height: 100px;
			float: left;
		}
		#my_cart >.left {
			width: 38%;
			height: 100%;
			float: left;
		}
		#my_cart >.my_cart1 {
			width: 24%;
			height: 99%;
			float: left;
		}
		#my_cart >.my_cart1 >.img {
			height: 100%;
			width: 13%;
			float: left;
			margin-top: 20px;
		}
		#my_cart >.my_cart1 >.img > img.my_cart{
			height: 32px;
		}
		#my_cart >.my_cart1 >.cart{
			margin-top: 28px;
			height: 100%;
			width: 87%;
			font-size: 20px;
			font-weight: 600;
			float: left;
		}
		#my_cart >.my_cart1 >.redline {
			width: 96.5%;
			height: 2.5px;
			background-color: red;
			float: left;
			margin-top: -57px;
		}
		#table {
			width: 100%;
			float: left;
		}
		td {
			padding-top: 20px;
			border-top: gray 1px solid;
		}
		#end_line {
			float: left;
			width: 70%;
			height: 2.5px;
			background-color: red;
		}
		#end_line_left {
			float: left;
			width: 15%;
			height: 2.5px;
		}
		#end_line_right {
			width: 15%;
			height: 2.5px;
			float: left;		
		}
		table {
			padding-top: 20px;
			padding-bottom: 20px;
		}
		#check_out {
			width: 100%;
			height: 300px;
		}
		#check_out >.left {
			width: 37.5%;
			height: 100%;
			float: left;
		}
		#check_out >.form {
			padding-left: 20px;
			padding-top: 30px;
			width: 25%;
			height: 100%;
			float: left;
			font-weight: bold;
			font-size: 18px;
			background-color: rgb(234, 200, 206);
			border-radius: 30px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		#check_out >.right {
			width: 37.5%;
			height: 100%;
			float: right;
		}
		.form input {
			margin-top: 5px;
			margin-bottom: 5px;
			border-radius: 5px 5px 5px 5px;
		    height: 32px;
		    width: 285px;
		    border: none;
		}
		p {
			margin-left: -15px;
			font-size: 20px;
  			line-height: 1.2;
  			color: black;
		}
		button {
			margin-top: 20px;
			margin-left: 80px;
			height: 40px;
			width: 120px;
			border-radius: 20px;
			font-size: 18px;
			background-color: red;
			color: white;
			border: none;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		button:hover {
			background-color: red;
			color: white;
			-webkit-transform: scale(1.025);
			-ms-transform: scale(1.025);
			transform: scale(1.025);
			transition: 0.3s ease;
		}
		<?php include 'header.css' ?>
		button.btn-update-quantity {
			margin: 8px;
			padding: 0px;
			background-color: red;
			height: 20px;
			width: 20px;
			border-radius: 3px;
			align-items: center;
		}
		button.btn-delete {
			margin: 0px;
			padding: 0px;
			font-size: 12px;
			background-color: red;
			height: 20px;
			width: 20px;
			border-radius: 3px;
			align-items: center;
		}
		
	</style>
</head>
<body>
	<div id="header_cart">
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
										Trang chủ
									</a>
								</li>
								<li>
									<a href="view_cart.php">
										Giỏ hàng
									</a>
								</li>
								<?php if (empty($_SESSION['id'])) {?>
									<li>
										<a href="signin.php">
											Đăng nhập
										</a>
									</li>
									<li>
										<a href="signup.php">
											Đăng kí
										</a>
									</li>
								<?php } else { ?>
									<li>
										<a href="signout.php">
											Đăng xuất
										</a>
									</li>
								<?php  } ?>
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

			</div>
			<div class="cart">	

			</div>
		</div>
	</div>
	<div id="red_line"></div>
</div>
	</div>
	<div id="cart">
		<div id="left"></div>
		<div id="mid">
			<div id="my_cart">
				<div class="left"></div>
				<div class="my_cart1">
					<div class="img">
						<img class="my_cart" src="icon/PinClipart.com_grocery-bag-clipart_502777.png">
					</div>
					<div class="cart">YOUR SHOPPING CART</div>
					<div class="redline"></div>
				</div>
			</div>	
		<div id="table">
			<?php 
			if (isset($_SESSION['cart'])) {
				if (empty($_SESSION['cart'])) { ?>
					</div>
				<?php } else {
					$cart = $_SESSION['cart'];
					$total = 0;
				?>
				<table width="100%">
					<tr>
						<th align="center" colspan="2">Product</th>
						<th align="center">Unit Price</th>
						<th align="center">Quantity</th>
						<th align="center">Total</th>
						<th align="center">Delete</th>
					</tr>
					<?php foreach ($cart as $id => $each): ?>
						<tr>
							<td align="center">
								<img height="100" src="admin/products/photo/<?php echo $each['photo'] ?>">
							</td>
							<td style="font-weight: 525;" align="left"><?php echo $each['name'] ?></td>
							<td align="center">
								<span class="span-price">
									<?php echo $each['price'] ?>
								</span>
								$
							</td>
							<td align="center">
								<button class="btn-update-quantity" data-id='<?php echo $id ?>'
								data-type='0'>
									-
								</button>
								<span class="span-quantity">
									<?php echo $each['quantity'] ?>
								</span>
								<button class="btn-update-quantity" data-id='<?php echo $id ?>'
								data-type='1'>
									+
								</button>
							</td>
							<td align="center">
								<span class="span-sum">
									<?php 
										$sum = $each['price'] * $each['quantity'];
										$total += $sum;
										echo $sum;
									?>
								</span>
								$
							</td>
							<td align="center">
								<button class="btn-delete" data-id='<?php echo $id ?>'>
									X
								</button>
							</td>
						</tr>
					<?php endforeach ?>
				</table>
				<div id="end_line_left"></div>
				<div id="end_line"></div>
				<div id="end_line_right"></div>
				<h1 style="padding-top: 20px;" align="center">
					Total price :
					<span id="span-total">
						<?php echo $total ?>
					</span> 
					$
				</h1>
				<br>
				<?php  
					$id = $_SESSION['id'];
					require 'admin/connect.php';
					$sql = "select * from customers where id = '$id'";
					$result = mysqli_query($connect,$sql);
					$each = mysqli_fetch_array($result);
				?>
				<div id="check_out">
					<div class="left"></div>
					<div class="form">
						<form method="post" action="process_checkout.php">
							<p align="center">
								Checkout
							</p>
							Name
							<br>
							<input type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
							<br>
							Phone Number
							<br>
							<input type="text" name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
							<br>
							Address
							<br>
							<input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
							<br>
							<button>Buy Now</button>
						</form>
					</div>
					<div class="right"></div>
				</div>
			</div>
			<?php }
				}
				else { ?>
					</div>
				<?php } ?>
		</div>
		<div id="right"></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".btn-update-quantity").click(function(){
				let btn = $(this);
				let id = btn.data('id');
				let type = btn.data('type');
				$.ajax({
					url: 'update_quantity_in_cart.php',
					type: 'GET',
					data: {id,type},
				})
				.done(function() {
					let parent_tr = btn.parents('tr');
					let price = parent_tr.find('.span-price').text();
					let quantity = parent_tr.find('.span-quantity').text();
					if (type == 1) {
						quantity++;
					}
					else {
						quantity--;
						if (quantity === 0) parent_tr.remove();
					}
					parent_tr.find('.span-quantity').text(quantity);
					let sum = price * quantity;
					parent_tr.find('.span-sum').text(sum);
					getTotal();
					
				});
			});
			$(".btn-delete").click(function() {
				let btn = $(this);
				let id = btn.data('id');
				let type = btn.data('type');
				$.ajax({
					url: 'delete_from_cart.php',
					type: 'GET',
					data: {id},
				})
				.done(function() {
					btn.parents('tr').remove();
					getTotal();
				});
			});
		});
		function getTotal(){
			let total = 0;
			$(".span-sum").each(function(){
				total += parseFloat($(this).text());
			$("#span-total").text(total);
			});
			if (total == 0) {
				$('#table').remove();
			}
		}
	</script>
</body>
</html>