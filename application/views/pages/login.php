<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>فرم ورود به سیستم</title>
	<link type="text/css" href="http://<?php echo base_url(); ?>assets/login_styles/css/bootstrap-rtl.min.css" rel="stylesheet">
	<link type="text/css" href="http://<?php echo base_url(); ?>assets/login_styles/css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="http://<?php echo base_url(); ?>assets/login_styles/css/style.css" rel="stylesheet" />
</head>

<body dir="rtl">
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>ورود به سیستم</h3>
				</div>
				<div class="card-body">
					<form method="POST" action="http://<?php echo base_url(); ?>login/login_validation">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text input-icon"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" id="txt-username" name="username" placeholder="نام کاربری" required>
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text input-icon"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" id="txt-password" name="password" placeholder="رمز عبور" required>
							
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox" name="remember">مرا بخاطر بسپار
						</div>
						<div class="form-group">
							<input type="submit" value="ورود" class="btn float-right login_btn">
						</div>
						
					</form>
					
				</div>
				
				
				<span id="my_msg" class="d-flex justify-content-center" ><?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  ?>  </span>
				
				
				
				

				
				<div class="card-footer">
					
					<div class="d-flex justify-content-center links">
						
						<a href="#"  class="btn btn-primary" data-toggle="modal" data-target="#myModal">تماس با واحد آی تی </a>
						 <span id="msg_span" style="font-size: larger; color: greenyellow;"><?php if(isset($msg)){echo $msg;} ?></span>

					</div>
				</div>
			</div>
		</div>




		<!-- The Modal -->
		<div class="modal" id="myModal" >
			<div class="modal-dialog">
				<div class="modal-content">
			
					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">ارسال پیام</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					
					<!-- Modal body -->
					<div class="modal-body">

						<form method="POST">

							<div class="form-group">
								<label for="title">نام :</label>
								<input type="text" class="form-control" id="title" name="name" required>
							</div>

							<div class="form-group">
								<label for="matn">متن :</label>
								<textarea class="form-control" id="matn" name="matn" rows="6" cols="50" required></textarea>
							</div>
							
							<button type="submit" class="btn btn-default" name="send_msg">ارسال</button>
						</form>

					</div>
					
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
					</div>
				
				</div>

			</div>
		</div>










	</div>





	<script src="http://<?php echo base_url(); ?>assets/login_styles/js/jquery-3.1.1.min.js"></script>
	<script src="http://<?php echo base_url(); ?>assets/login_styles/js/bootstrap.min.js"></script>
</body><!-- This template has been downloaded from Webrubik.com -->
</html>



