<?php 
session_start();
if(empty($_SESSION['id'])){
	header('location:signin.php?error=Bạn cần phải đăng nhập');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
Đây là trang người dùng xin chào
<?php 
echo $_SESSION['name'];
?>
<br>
<a href="signout.php">Đăng xuất</a>
</body>
</html>