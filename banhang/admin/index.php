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
			height: 300px;
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
			height: 296px;
			background: white;
			float: left;

		}
		#giua >.login >.header {
  			border-radius: 7px 7px 0px 0px;
			width: 100%;
			height: 33%;
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
			height: 300px;
			background: rgb(108, 112, 147);
			float: left;
		}
		h1 { 
			padding-top: 30px;
			text-align: center;
			color: white;
			font-size: 40px;
		}
		img {
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
	<div id="tren"></div>
	<div id="giua">
		<div class="left"></div>
		<div class="login">
			<div class="header">
				<h1>Admin Login</h1>
			</div>
			<div class="top1"></div>
			<form method="post" action="process_login.php">
				<div id="email_icon">
					<img src="../icon/loginicon.png">
				</div>
				<input type="email" name="email" autocomplete="false" placeholder=" Email or Phone ">
				<br>
				<br>
				<div id="password_icon">
					<img src="../icon/lock-48.png">
				</div>
				<input type="password" name="password" autocomplete="false" placeholder=" Password">
				<br>
				<button>Login</button>
			</form>
		</div>
	</div>
	<div id="duoi"></div>

</body>
</html>