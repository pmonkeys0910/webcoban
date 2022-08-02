<?php  
// if (isset($_SESSION['id'])) {
// 	header('location:user.php');
// 	exit;
// }
if (isset($_COOKIE['remember'])) {
	$token = $_COOKIE['remember'];
	require 'admin/connect.php';
	$sql = "select * from customers
	where token = '$token'
	limit 1";
	$result = mysqli_query($connect,$sql);
	$number_rows = mysqli_num_rows($result);
	if ($number_rows == 1) {
		$each = mysqli_fetch_array($result);
		$_SESSION['id'] = $each['id'];
		$_SESSION['name'] = $each['name'];
	}
}
if (isset($_SESSION['id'])){
	header('location:user.php');
	exit;
}
?>
<!-- <!DOCTYPE html>
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
		#tong {
			width: 100%;
			background: rgb(108, 112, 147);
			height: 100%;
			float: left;

		}
		#tren {
			width: 100%;
			height: 150px;
			background: rgb(108, 112, 147);
			float: left;
		}
		#giua {
			width: 100%;
			height: 400px;
			background: rgb(108, 112, 147);
			float: left;
		}
		#giua >.left {
			width: 37%;
			height: 100%;
			background: rgb(108, 112, 147);
			float: left;
		}
		#giua >.login {
  			border-radius: 7px;
			width: 26%;
			height: 396px;
			background: white;
			float: left;

		}
		#giua >.login >.header {
  			border-radius: 7px 7px 0px 0px;
			width: 100%;
			height: 25%;
			background: rgb(65, 67, 88);
			float: left;
		}
		#giua >.login >.top1 {
			height: 30px;
			width: 100%;
			float: left;
			background: white;
		}
		#duoi {
			width: 100%;
			height: 400px;
			background: rgb(108, 112, 147);
			float: left;
		}
		h1 { 
			padding-top: 30px;
			text-align: center;
			color: white;
			font-size: 40px;
		}
		img.img_login {
			padding: 5px 5px;
			width: 20px;
			height: 20px;
		}
		#email_icon {
  			border-radius: 5px 0px 0px 5px;
			width: 30px;
			height: 30px;
			float: left;
			background: rgb(65, 67, 88);
		}
		#password_icon {
  			border-radius: 5px 0px 0px 5px;
			width: 30px;
			height: 30px;
			float: left;
			background: rgb(65, 67, 88);
		}
		form {
			padding: 32px;
		}
		.login input[type=email] {
		    border-radius: 0px 5px 5px 0px;
		    height: 26px;
		    width: 260px;
		}
		.login input[type=password] {
		    border-radius: 0px 5px 5px 0px;
		    height: 26px;
		    width: 260px;
		}
		button {
			font-size: 18px;
			color: white;
			margin-top: 20px;
			margin-left: 100px;
			height: 40px;
			width: 130px;
			background-color: rgb(65, 67, 88);
			border-radius: 4px;
			border: none;
		}
		a {
			color: rgb(204, 0, 68);
			text-decoration: none;
			font-size: 17px;
		}
		span {
			padding-left: 70px;
		}
	</style>
</head>
<body>
	<div id="tong"></div>
	<div id="tren"></div> -->
	<!-- <div id="giua">
		<div class="left"></div>
		<div class="login">
			<div class="header">
				<h1>Login</h1>
			</div>
			<div class="top1"></div>
			<form method="post" action="process_signin.php">
				<div id="email_icon">
					<img class="img_login" src="icon/loginicon.png">
				</div>
				<input type="email" name="email" autocomplete="false" placeholder=" Email or Phone ">
				<br>
				<br>
				<div id="password_icon">
					<img class="img_login" src="icon/lock-48.png">
				</div>
				<input type="password" name="password" autocomplete="false" placeholder=" Password">
				<br>
				<br>
				<input type="checkbox" name="remember">
				Remember &nbsp;&nbsp;&nbsp;
				<a href="forgot_password.php">
					Forgot password ?
				</a>
				<br>
				<button>Login</button>
				<br>
				<br>
				<span>
					Not a member ? 
					<a href="signup.php">Sign up now</a>
				</span>
			</form>
		</div>
	</div> -->
	<div class="modal fade" id="modal-signin">
    <div class="modal-dialog" align="center" style="top: 100px;">
	    <div class="modal-content" style="width: 300px; text-align: center;">
	    	<div class="modal-header">
          	<button type="button" class="close" data-dismiss="modal">&times;</button>
         	<h3 class="modal-title">Login</h3>
        	</div>
        	<div class="modal-body">
        		<div class="alert alert-danger" style="display: none;" id="div-error"></div>
				<form method="post" id="form-signin">
					<div id="email_icon">
					<img class="img_login" src="icon/loginicon.png">
					</div>
					<input style="border-radius: 0px 5px 5px 0px; margin-left: -23px; height: 30px; width: 200px;" type="email" name="email" autocomplete="false" placeholder=" Email or Phone ">
					<br>
					<br>
					<div id="password_icon">
						<img class="img_login" src="icon/lock-48.png">
					</div>
					<input style="border-radius: 0px 5px 5px 0px; margin-left: -23px; height: 30px; width: 200px;" type="password" name="password" autocomplete="false" placeholder=" Password">
					<br>
					<br>
					<input type="checkbox" name="remember">
					Remember &nbsp;&nbsp;&nbsp;
					<a href="forgot_password.php">
						Forgot password ?
					</a>
					<br>
					<br>
					<br>
					<span class="span-login">
						Not a member ? 
						<a href="signup.php">Sign up now</a>
					</span>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default" style="margin-right: 115px; background: rgb(91,192,222); color: white;">Submit</button>
				</form>
	          	<button type="button" class="btn btn-default" data-dismiss="modal" style=" background: rgb(40,42,53); color: white;">Close</button>
	        </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#form-signin").submit(function (event) {
			event.preventDefault();
			$.ajax({
				url: 'process_signin.php',
				type: 'POST',
				dataType: 'html',
				data: $("#form-signin").serializeArray(),
			})
			.done(function(response) {
				if (response !== '1') {
					$("#div-error").text(response);
					$("#div-error").show();
				} else {
					$("#modal-signin").toggle();
					$(".modal-backdrop").hide();
					$(".menu-user").show();	
					$(".menu-guest").hide();
					$("body").removeClass('modal-open');
					$("body").css('padding-right', '0px');
					$(".product_add_to_cart").show();	
				}		
			});
		});
	});
</script>
	<!-- <div id="duoi"></div>

</body>
</html> -->