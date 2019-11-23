	<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>Login</title>
</head>
<body>
		<div class="container">
			<br />
			<div class="col-lg-12">
			<div class="panel panel-default col-lg-6 lform">
				<div class="panel-heading">Login</div>
				
				<div class="panel-body">
					<?php 
					if($this->session->flashdata('message'))
					{
						echo '<div class="alart alart-danger">'.$this->session->flashdata("message").'
								</div>';

					}
					 ?>
					
					<form method="post" action="<?php echo base_url();?>login_con/validation" >

					<div class="form-group">
						<label>Enter your Email Address</label>
						<input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>">
						<span class="text-danger"><?php echo form_error('user_email'); ?></span>
					</div>

					<div class="form-group">
						<label>Enter your Password</label>
						<input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>">
						<span class="text-danger"><?php echo form_error('user_password'); ?></span>

					</div>

					<div class="forn-group">
						<input type="submit" name="login" value="Login" class="btn btn-info">
						<a href="<?php echo base_url(); ?>register_con">Register</a>
					</div>	


					</form>
					</div>
				</div>
			</div>
		</div>
</body>
</html>