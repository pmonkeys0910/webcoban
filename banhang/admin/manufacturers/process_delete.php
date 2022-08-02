<?php require '../check_super_admin_login.php';

if(empty($_GET['id'])){
	header('location:form_update.php?error=Phải điền mã để xoá');
	exit;
}
$id = $_GET['id'];
require '../connect.php';
$sql = "delete from manufacturers
where
id = '$id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success=Xoá thành công');
