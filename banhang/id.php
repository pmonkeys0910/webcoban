<style type="text/css">
	
</style>
<?php 
$id = $_GET['id'];
	require 'admin/connect.php';
	$sql = "select * from products
	where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
?>
<div id="giua">
	<h1>
		<?php echo $each['name'] ?>
	</h1>
	<img src="admin/products/photo/<?php echo$each['photo'] ?>" height='200'>
	<p><?php echo $each['price'] ?>$</p>
	<p><?php echo nl2br($each['description']) ?></p>
</div>