<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['cart'])) {
	if(empty($_SESSION['cart'])){
		echo "Giỏ hàng trống";
	} else {
$cart = $_SESSION['cart'];
$sum = 0;
?>
<table width="65%">
	<tr>
		<th align="center" colspan="2">Product</th>
		<th align="center">Each</th>
		<th align="center">Quantity</th>
		<th align="center">Total</th>
		<th align="center">Delete</th>
	</tr>
	<?php foreach ($cart as $id => $each): ?>
		<tr>
			<td align="center">
				<img height="100" src="admin/products/photo/<?php echo $each['photo'] ?>">
			</td>
			<td align="left"><?php echo $each['name'] ?></td>
			<td align="center"><?php echo $each['price'] ?>$</td>
			<td align="center">
				<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">
					-
				</a>
				<?php echo $each['quantity'] ?>
				<a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">
					+
				</a>
			</td>
			<td align="center">
				<?php 
					$result = $each['price'] * $each['quantity'];
					$sum += $result;
					echo $result; 
				?>$
			</td>
			<td align="center">
				<a href="delete_from_cart.php?id=<?php echo $id ?>">X</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
<h1>Tổng tiền hoá đơn : <?php echo $sum ?>$</h1>
<?php 
	$id = $_SESSION['id'];
	require 'admin/connect.php';
	$sql = "select	* from customers where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
 ?>
<form method="post" action="process_checkout.php">
	Tên người nhận
	<input type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
	<br>
	SĐT người nhận
	<input type="text" name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
	<br>
	Địa chỉ người nhận
	<input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
	<br>
	<button>Đặt hàng</button>
<?php }} else echo "Giỏ hàng trống" ?>
</form>
</body>
</html>