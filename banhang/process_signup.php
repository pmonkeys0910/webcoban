<?php

$name =  $_POST['name'];
$email =  $_POST['email'];
$password =  $_POST['password'];
$phone_number =  $_POST['phone_number'];
$address =  $_POST['address'];

require 'admin/connect.php';
$sql = "select count(*) from customers 
where email = '$email'";
$result = mysqli_query($connect,$sql);
$number_rows = mysqli_fetch_array($result)['count(*)']; 
if ($number_rows == 1) {
	echo "Email đã tồn tại";
	exit;
}

$sql = "insert into customers(name,email,password,phone_number,address)
value ('$name','$email','$password','$phone_number','$address')";
mysqli_query($connect,$sql);
// require 'sendmail.php';
// $title = "Đăng kí thành công";
// $content = "Chúc mừng bạn <a href = 'https:google.com'>Link </a>";
// sendmail($email,$name,$title,$content);
$sql = "select id from customers 
where email = '$email'";
$result = mysqli_query($connect,$sql);
$id = mysqli_fetch_array($result)['id'];
session_start();
$_SESSION['id'] = $id;
$_SESSION['name'] = $name;

mysqli_close($connect);
echo 1;
