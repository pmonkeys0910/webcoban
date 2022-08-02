<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title></title>
	<style type="text/css">
		* {
			padding: 0px;
			margin: 0px;
		}
		#tong {
			width: 100%;
			height: 2450px;
			background: black;
		}
		<?php require 'header.css' ?>
		<?php require 'footer.css' ?>
		<?php require 'products.css' ?>
		
	</style>
</head>
<body>
	<div id="tong">
		<?php include 'header.php' ?>
		<?php include 'products.php' ?>
		<?php include 'footer.php' ?>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".span-cart").click(function() {
				let id = $(this).data('id');
				$.ajax({
					url: 'add_to_cart.php',
					type: 'GET',
					data: {id},
				})
			});
		});
	</script>
</body>
</html>