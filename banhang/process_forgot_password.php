<?php 
function current_url() {
	$url = "http://" . $_SERVER['HTTP_HOST'];
	return $url;
}

$email = $_POST['email'];

require 'admin/connect.php';

$sql = "select id,name from customers
where email = '$email'";

$result = mysqli_query($connect,$sql);
if (mysqli_num_rows($result) === 1) {
	$each = mysqli_fetch_array($result);
	$id = $each['id'];
	$name = $each['name'];
	$sql = "delete from forgot_password
	where customer_id ='$id'";
	mysqli_query($connect,$sql);
	$token = uniqid();
	$sql = "insert into forgot_password(customer_id,token) values('$id','$token')";
	mysqli_query($connect,$sql);

	$link = current_url() . '/banhang/change_new_password.php?token=' . $token;
	require 'sendmail.php';
	$title = 'Change new password';
	$content = "Bấm vào link để thay đổi mật khẩu <a href = '$link'> Link </a>";
	sendmail($email,$name,$title,$content);
}