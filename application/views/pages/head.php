<!doctype html>
<html lang="en-us">
<head>
<!--Page Title-->
<title>Real Estate Management system</title>
<!--Meta Tags-->
<meta charset="UTF-8">
<meta name="author" content="">
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<!-- Set Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/boy.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/select-theme-default.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/owl.theme.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"/>
<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/boy.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
</head>
<body id='top'>
<header>
<div id="top-strip">
	<div class="container">
		<ul class="pull-left social-icons">
			<li><a href="#" class="fa fa-google-plus"></a></li>
			<li><a href="#" class="fa fa-twitter"></a></li>
			<li><a href="#" class="fa fa-linkedin"></a></li>
			<li><a href="#" class="fa fa-facebook"></a></li>
		</ul>
		<div id="login-box" class='pull-right'>
		<a href="#"><?php if (isset($_SESSION['id'])){ echo $_SESSION['name'];}?></a>
        
			
			<a href="<?php echo base_url();?>/index.php/admin/login" class='fa fa-pencil'>Admin</a>
		</div>
	</div>
</div>
</header>
<!-- /Header -->



<div class="slider-section">
	<div id="premium-bar">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/logo.png" alt="logo"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class=""><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="#recent">Recent Properties</a></li>
						<!--<li><a href="#agent">agents</a></li>-->
                        <li><a href="<?php echo base_url();?>index.php/request">Request</a></li>
                       <?php if (isset($_SESSION['id'])){?>
                        <li><a  href="<?php echo base_url();?>index.php/logout">Logout</a></li>
                       <?php } else{?>
                       <li><a  href="<?php echo base_url();?>index.php/login">Login</a></li>
                       <li><a href="<?php echo base_url();?>index.php/register">Register</a></li>
                       <?php } ?>
                       
	
					<li><a href="#contact">contact</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
			</nav>
		</div>
	</div>
    
    
    
	<!-- Slider-Section -->
	<div class="main-flexslider">
		<ul class="slides">
			<li class='slides' id='slide-n1'><img src="<?php echo base_url();?>img/slide-01.jpg" alt="slide 01">
		
			</li>
			<li class='slides' id='slide-n2'><img src="<?php echo base_url();?>img/slide-02.jpg" alt="slide">
		
			</li>
			<li class='slides' id='slide-n3'><img src="<?php echo base_url();?>img/slide-03.jpg" alt="slide">
			
			</li>
		</ul>
	</div>
</div>
<!-- Search-Section -->
<div class="search-section">
	<div class="container">
		<form action="<?php echo base_url();?>/index.php/search">
			<div class="select-wrapper select-smaill" id='select-rent'>
				<p>
					 Rent or Sale
				</p>
				<select class='elselect' name="nature" >
					<option value="rent" selected>Rent</option>
					<option value="sale">Sale</option>
				</select>
			</div>
			
			<div class="select-wrapper select-big">
				<p>
					 location(state)
				</p>
				<select class='elselect' name="state" id="state" >
                <option value="" selected="selected">- Select -</option> 
                      <option value="Abuja FCT">Abuja FCT</option>
                      <option value="Abia">Abia</option>
                      <option value="Adamawa">Adamawa</option>
                      <option value="Akwa Ibom">Akwa Ibom</option>
                      <option value="Anambra">Anambra</option>
                      <option value="Bauchi">Bauchi</option>
                      <option value="Bayelsa">Bayelsa</option>
                      <option value="Benue">Benue</option>
                      <option value="Borno">Borno</option>
                      <option value="Cross River">Cross River</option>
                      <option value="Delta">Delta</option>
                      <option value="Ebonyi">Ebonyi</option>
                      <option value="Edo">Edo</option>
                      <option value="Ekiti">Ekiti</option>
                      <option value="Enugu">Enugu</option>
                      <option value="Gombe">Gombe</option>
                      <option value="Imo">Imo</option>
                      <option value="Jigawa">Jigawa</option>
                      <option value="Kaduna">Kaduna</option>
                      <option value="Kano">Kano</option>
                      <option value="Katsina">Katsina</option>
                      <option value="Kebbi">Kebbi</option>
                      <option value="Kogi">Kogi</option>
                      <option value="Kwara">Kwara</option>
                      <option value="Lagos">Lagos</option>
                      <option value="Nassarawa">Nassarawa</option>
                      <option value="Niger">Niger</option>
                      <option value="Ogun">Ogun</option>
                      <option value="Ondo">Ondo</option>
                      <option value="Osun">Osun</option>
                      <option value="Oyo">Oyo</option>
                      <option value="Plateau">Plateau</option>
                      <option value="Rivers">Rivers</option>
                      <option value="Sokoto">Sokoto</option>
                      <option value="Taraba">Taraba</option>
                      <option value="Yobe">Yobe</option>
                      <option value="Zamfara">Zamfara</option>
				</select>
			</div>
			
			
			
		
			<input type="submit" value="search" class='yellow-btn'>
		</form>
         			
	</div>
</div>
