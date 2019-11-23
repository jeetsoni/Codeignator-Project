<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/style.css"); ?>">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>testing</title>
</head>	
<body>
		<div class="container">
			<br> 
			<h3 align="center">Registration</h3>
			<br>
			<div class="panel panel-default rform">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<?php 
					if($this->session->flashdata('message'))
					{
						echo '
						<div class="alart alart-sucess">
								'.$this->session->flashdata('message').'
						</div>

						';
					}

					 ?>

					<form method="POST" action="<?php echo base_url(); ?>register_con/validation">
						<div class="form-group">
							<label>Enter Your Name</label>
							<input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>">
							<span class="text-danger"><?php echo form_error('user_name'); ?></span>
						</div>
						<div class="form-group">
							<label>Enter Your Valid Email Address</label>
							<input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>">
							<span class="text-danger"><?php echo form_error('user_email'); ?></span>
						</div>
						<div class="form-group">
							<label>Enter Password</label>
							<input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>">
							<span class="text-danger"><?php echo form_error('user_password'); ?></span>

						</div>
						<div class="form-group">
							<input type="submit" name="Register" value="Register" class="btn-btn-info">
							<a href="<?php echo base_url(); ?>login_con">Login</a>
						</div>


					</form>
				</div>
			</div>
		</div>
</body>
</html>