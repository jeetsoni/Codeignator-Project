	<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/style.css'); ?>">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Login</title>
</head>
<body style="background-image: url('<?php echo base_url('Assets/img/login2.jpg')  ?>'); background-size: cover;">
	
<div class="container pt-3" >
  <div class="row justify-content-sm-center">
    <div class="col-sm-6 col-md-4">

      <div class="card border-info text-center">
        <div class="card-header">
          Login
        </div>
        <?php 
					if($this->session->flashdata('message'))
					{
						echo '<div class="alert alert-danger">'.$this->session->flashdata("message").'
								</div>';

					}
					 ?>
        <div class="card-body">
          <img src="<?php echo base_url('Assets/img/Marwadi_University_logo.png'); ?>" alt="not Found" width="100px">
          <h4 class="text-center">Marwadi University</h4>
          
          <form class="form-signin" method="post" action="<?php echo base_url();?>login_con/validation" >

					
						<input placeholder="Email" type="text" name="user_email" class="form-control mb-2" value="<?php echo set_value('user_email'); ?>">
						<span class="text-danger"><?php echo form_error('user_email'); ?></span>
				

					
						
						<input placeholder="Password" type="password" name="user_password" class="form-control mb-2" value="<?php echo set_value('user_password'); ?>">
						<span class="text-danger"><?php echo form_error('user_password'); ?></span>

					

					
						<input type="submit" name="login" value="Login" class="btn btn-lg btn-info btn-block mb-1">
						<a href="<?php echo base_url(); ?>register_con" class="float-right">Create an account </a>
					</form>


        </div>
      </div>
      
    </div>
  </div>
</div>


</body>
</html>

		








