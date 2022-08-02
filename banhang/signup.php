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
			height: 100px;
			background: rgb(108, 112, 147);
			float: left;
		}
		#giua {
			width: 100%;
			height: 500px;
			background: rgb(108, 112, 147);
			float: left;
		}
		#giua >.left {
			width: 37%;
			height: 100%;
			background: rgb(108, 112, 147);
			float: left;
		}
		#giua >.sign_up {
  			border-radius: 7px;
			width: 26%;
			height: 496px;
			background: white;
			float: left;

		}
		#giua >.sign_up >.header {
  			border-radius: 7px 7px 0px 0px;
			width: 100%;
			height: 25%;
			background: rgb(65, 67, 88);
			float: left;
		}
		#giua >.sign_up >.top1 {
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
		.sign_up input{
		    border-radius: 5px 5px 5px 5px;
		    height: 26px;
		    width: 285px;
		    padding-left: 15px;
		}
		#form-signup {
			padding: 40px;
		}

		button {
			font-size: 18px;
			color: white;
			margin-top: 20px;
			margin-left: 92px;
			height: 40px;
			width: 130px;
			background-color: rgb(65, 67, 88);
			border-radius: 4px;
			border: none;
		}
	</style>
</head>
<body> -->
<div class="modal fade" id="modal-signup">
    <div class="modal-dialog" align="center" style="top: 100px;">
	    <div class="modal-content" style="width: 300px; text-align: center;">
	    	<div class="modal-header">
          	<button type="button" class="close" data-dismiss="modal">&times;</button>
         	<h3 class="modal-title">Sign up</h3>
        	</div>
        	<div class="modal-body">
        		<div class="alert alert-danger" style="display: none;" id="div-error"></div>
				<form method="post" id="form-signup">
					<input type="text" name="name" placeholder="Name">
					<br>
					<br>
					<input type="email" name="email" placeholder="Email">
					<br>
					<br>
					<input type="password" name="password" placeholder="Password">
					<br>
					<br>
					<input type="text" name="phone_number" placeholder="Phone">
					<br>
					<br>
					<input type="text" name="address" placeholder="Address">
					<br>
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
		$("#form-signup").validate({
			rules: {
				"name": {
					required: true,
					maxlength: 15
				},
				"email": {
					required: true,
					email: true,
				},
				"password": {
					required: true,
					minlength: 8,
				},
			},
			messages: {
				"name": {
					required: "Bắt buộc điền tên",
					maxlength: "Nhập tối đa 15 ký tự"
				},
				"email": {
					required: "Bắt buộc điền email",
					email: "Email không hợp lệ",
				},
				"password": {
					required: "Bắt buộc điền mật khẩu",
					minlength: "Mật khẩu quá ngắn",
				},
			},
			submitHandler: function(form) {
				$.ajax({
					url: 'process_signup.php',
					type: 'POST',
					dataType: 'html',
					data: $("#form-signup").serializeArray(),
				})
				.done(function(response) {
					if (response !== '1') {
						$("#div-error").text(response);
						$("#div-error").show();
					} else {
						$("#modal-signup").toggle();
						$(".modal-backdrop").hide();
						$(".menu-user").show();	
						$(".menu-guest").hide();
						$("body").removeClass('modal-open');
						$("body").css('padding-right', '0px');	
						$(".product_add_to_cart").show();	
					}
				});
			}
		});
	});
</script>