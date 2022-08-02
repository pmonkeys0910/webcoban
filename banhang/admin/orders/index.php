<?php require '../check_super_admin_login.php' ?>
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
		#header_admin {
			width: 100%;
			background-color: black;
			height: 135px;
			float: left;
		}
		#ad_tong {
			width: 100%;
			height: 100%;
			float: left;
			background-color: rgb(242, 242, 242);
		}
		<?php include '../../header.css' ?>
		#ad_menu {
			width: 200px;
			height: 100%;
			float: left;
			background-color: rgb(217, 217, 217);
			padding-bottom: 5px;
			border-radius: 0px 0px 4px 0px;
		}
		h2 {
			float: left;
			margin-top: 6px;
		}
		#menu_icon {
			width: 100%;
			float: left;
			background-color: whitesmoke;
			height: 40px;
			margin-bottom: 5px;
			box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.19);
		}
		img.menu {
			margin-left: 3px;
			margin-top: 7px;
			margin-right: 5px;
			float: left;
			height: 25px;
		}
		#r_menu > ul > li {
			margin-left: 10px;
			height: 35px;
			width: 180px;
			float: left;
			list-style: none;
			padding-top: 5px;
			background-color: rgb(204, 204, 204);
			border-radius: 4px;
			margin-top: 4px;
			margin-bottom: 4px;
			box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.19);

		}
		#r_menu > ul > li > a {
			font-size: 20px;
			color: black;
			text-decoration: none;
			margin-left: 10px;
			line-height: 30px;
			font-weight: 500;
		}
		#CRUD {
			margin-top: 20px;
			margin-left: 15px;
			width: 1290px;
			height: 100%;
			float: left;
		}
		a {
			text-decoration: none;
			color: red;
			font-weight: 500;
		}
		td {
			text-align: center;
		}
		table {
			background-color: white;
		}
	</style>
</head>
<body>
	<div id="header_admin">
		<div id="tren">
		<div id="top_header">
			<div class="top"></div>
			<div class="mid">
				<div class="left">
					<div class="left1"></div>
					<ul class="root">
						<li>
							<span>
								<img class="top_header" src="../../icon/768px-Red_Phone_Font-Awesome1.svg.png">
								<a href="#" class="top_header">0326-226-141</a>
							</span>
						</li>
						<li>
							<span>
								<img class="top_header" src="../../icon/mail-32.png">
								<a class="top_header">tranvanphuc@gmail.com</a>
							</span>
						</li>
						<li>
							<span>
								<img class="top_header" src="../../icon/pngfind.com-marker-png-731704.png">
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
								<img class="top_header" src="../../icon/pngfind.com-money-sign-png-519391.png">
								<a class="top_header">USD</a>
							</span>
						</li>
						<li>
							<span>
								<img class="top_header" src="../../icon/usericon.png">
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
	<div id="header">
		<div class="top"></div>
		<div class="mid">
			<div class="left"></div>
			<div class="logo">
				<span>
					<img src="../../icon/logo.webp">
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
	<?php
		if(isset($_GET['error'])) {
	?>
		<span style="color: red">
			<?php echo $_GET['error'] ?>
		</span>
	<?php
		}
	?>
	<?php
		if(isset($_GET['success'])) {
	?>
		<span style="color: green">
			<?php echo $_GET['success'] ?>
		</span>
	<?php
		}
	?>
	</div>
	<div id="ad_tong">
		<?php include "../menu.php" ?>
		<div id="CRUD">
			<?php  
require '../connect.php';
$sql = "select 
orders.*,
customers.name,
customers.phone_number,
customers.address
from orders
join customers 
on customers.id = orders.customer_id";
$result = mysqli_query($connect,$sql);
?>
<table border="1" width="100%">
	<tr>
		<th>Mã</th>
		<th>Thời gian đặt</th>
		<th>Thông tin người nhận</th>
		<th>Thông tin người đặt</th>
		<th>Trạng thái</th>
		<th>Tổng tiền</th>
		<th>Xem</th>
		<th>Sửa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td><?php echo $each['created_at'] ?></td>
			<td><?php echo $each['name_receiver'] ?>
				<br>
				<?php echo $each['phone_receiver'] ?>
				<br>
				<?php echo $each['address_receiver'] ?>
			</td>
			<td><?php echo $each['name'] ?>
				<br>
				<?php echo $each['phone_number'] ?>
				<br>
				<?php echo $each['address'] ?>
			</td>
			<td>
				<?php  
				switch ($each['status']) {
					case '0':
						echo "Mới đặt";
						break;
					case '1':
						echo "Đã duyệt";
						break;
					case '2':
						echo "Đã huỷ";
						break;
					default:
						echo "null";
						break;
				}
				?>
			</td>
			<td>
				<?php echo $each['total_price'] ?>
			</td>
			<td>
				<a href="detail.php?id=<?php echo $each['id'] ?>">
					Xem
				</a>
			</td>
			<td>
				<?php if ($each['status'] == 0) { ?>
				<a href="update.php?id=<?php echo $each['id'] ?>&status=1">
					Duyệt
				</a>
				/
				<a href="update.php?id=<?php echo $each['id'] ?>&status=2">
					Huỷ
				</a>
			<?php } ?>
			</td>
		</tr>
	<?php endforeach ?>
</table>
		</div>
	</div>
</body>
</html>