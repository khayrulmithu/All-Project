<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="exchangesoftware.info">
   	<meta name="description" content="<?php echo $settings['description']; ?>">
	<meta name="keywords" content="<?php echo $settings['keywords']; ?>">

    <title><?php echo BitDecodeTitle($_GET['a']); ?></title>

   <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/icofont.css">
    <link rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/owl.carousel.css">  
    <link rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/slidr.css">     
    <link rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/main.css">  
	<link id="preset" rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/presets/preset2.css">	
    <link rel="stylesheet" href="<?php echo $settings['url']; ?>assets/css/responsive.css">
		<?php if($lang['lang_type'] == "rtl") { ?>
	<link href="<?php echo $settings['url']; ?>assets/css/bootstrap-flipped.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo $settings['url']; ?>assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" media="all" />
	<?php } ?>
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<script src="<?php echo $settings['url']; ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $settings['url']; ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo $settings['url']; ?>assets/js/BitExchanger.js"></script>
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $settings['url']; ?>"><img style="height:36px" class="img-responsive" src="<?php echo $settings['url']; ?>assets/images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo $settings['url']; ?>index.php"><?php echo $lang['exchange']; ?></a></li>
							<li><a href="<?php echo $settings['url']; ?>index.php?a=testimonials"><?php echo $lang['testimonials']; ?></a></li>
							<li><a href="<?php echo $settings['url']; ?>index.php?a=affiliate"><?php echo $lang['affiliate']; ?></a></li> 
							<li><a href="<?php echo $settings['url']; ?>index.php?a=contact"><?php echo $lang['contact']; ?></a></li> 
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
					<!-- language-dropdown -->

					<!-- sign-in -->					
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<?php if(checkSession()) { ?>
						<li><a href="<?php echo $settings['url']; ?>account/exchanges"><?php echo idinfo($_SESSION['bit_uid'],"username"); ?></a></li>
						<li><a href="<?php echo $settings['url']; ?>logout"><?php echo $lang['logout']; ?></a></li>
						<?php } else { ?>
						<li><a href="<?php echo $settings['url']; ?>index.php?a=login"><?php echo $lang['login']; ?></a></li>
						<li><a href="<?php echo $settings['url']; ?>index.php?a=register"><?php echo $lang['create_account']; ?></a></li>
						<?php } ?>
					</ul><!-- sign-in -->	
					
					<div style="margin-left:20px;" class="dropdown language-dropdown">
						<i class="fa fa-globe"></i> 						
						<a data-toggle="dropdown" href="#"><span class="change-text"><?php echo $_COOKIE['lang']; ?></span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<?php echo getLanguage($settings['url'],null,1); ?>
						</ul>								
					</div><!-- language-dropdown -->					
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->

<div style="background-color: black; font-size:18px; color:white;  ">
    <div class="container">
        <div class="row">
            <div style="margin-top: 3px;" class="col-md-3 col-6">Working: 10 AM - 12 AM</div>
  
            <div style="margin-top: 0px;" class="col-md-3 col-6"><img src="http://dollarstation.epizy.com/assets/images/rsz_facebook.jpg" alt="Logo" height="23px"> <a style="color: white; margin-top: 3px; " href="https://www.facebook.com/dollarstationbd">dollarstationbd</a> </div>
  
            <div style="margin-top: 0px;" class="col-md-3 col-6"><img class="rounded-circle" style=" rounded-circle" <img="" src="http://dollarstation.epizy.com/assets/images/rsz_phone.png" alt="Logo" height="22px"> +8801701038914</div>
  
            <div style="margin-top: 0px;" class="col-md-3 col-6"><span class="pull-right">Operator: <span style="font-size:17px"><span style="color: white; background-color: green;   font-weight: bolder; padding-top: 4px; padding-bottom: 13px; padding-right: 10px; padding-left: 10px; margin: 2px; ">Online</span></span></span></div>
            
        </div>
    </div>
</div>

	</header><!-- header -->
