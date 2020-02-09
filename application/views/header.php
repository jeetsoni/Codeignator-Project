<!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/Assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/Assets/css/font-awesome.min">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="<?php echo base_url(); ?>private_area" class="navbar-brand ">
                    <img class="mb-3" src="<?php echo base_url('/Assets/img/Marwadi_University_logo.png') ?>" width="50px" height="50px" alt="CoolBrand">
                </a>
            </div>
            <p class="app_name navbar-brand">Stuent Guide </p>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="search navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="logo">
                        <a href="<?php echo base_url(); ?>profile_con"><img class="p_img1" src="<?php echo base_url('/upload/1D836C60-ABA5-4B40-9A05-E0664AFC1D53L0001.jpg') ?>" alt=""
                                width="50px" height="50px   "></a>
                    </li>
                    <li><a href="#"><img class="p_img" src="<?php echo base_url('/Assets/img/msg_icon.png') ?>" alt=""
                        width="50px" height="50px"></a></li>
                    
                    <li>
                    <div class="dd dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url(); ?>profile_con">My Profile</a></li>
                          <?php if($this->session->userdata('id'))
                          {
                          ?>
                          <li><a href="<?php echo base_url(); ?>private_area/logout">Logout</a></li>
                          <?php } ?>
                        </ul>
                    </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>