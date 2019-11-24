<!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="<?php echo base_url(); ?>private_area">Admin Panel</a>
  
  
  <div class="dropdown" style="margin-left: auto;margin-right: 100px;">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
   <?php echo $this->session->userdata('uname'); ?>
  </button>
  <div class="dropdown-menu bg-info">
    <a class="dropdown-item" href="<?php echo base_url(); ?>profile_con">My Profile</a>
    <?php if($this->session->userdata('id'))
  {

   ?>
    <a class="dropdown-item" href="<?php echo base_url(); ?>private_area/logout">Logout</a>
  </div>
  
</div>
<?php } ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
</nav>
