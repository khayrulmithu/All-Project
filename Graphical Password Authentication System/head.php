<!DOCTYPE html>
<html>
<head>


	<?php 
				$page = '1';

				if(isset($_GET['a'])){
					$page = $_GET['a'];
				}

				// if(isset($_GET['b'])){
				// 	$page = $_GET['b'];
				// }

				// if(isset($_GET['page'])){
				// 	$page = $_GET['page'];
				// }
	?>

	<style>

</style>

	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	 
	<title>Graphical Password</title>

	<nav class="navbar navbar-expand-lg navbar-dark" style="font-size: 20px; color: white; padding-bottom: 9px; background:rgb(90, 112, 126);">

		<div class="logo" style="padding-left: 10px; padding-right: 100px; padding-top: 0px; padding-bottom: 5px; font-size:px;">
				Graphical Password
			</div>

		<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon" ></span>
		 </button> 


		<div class="collapse navbar-collapse" id="collapsibleNavbar">


		 <div class="navbar-collapse" style="padding-right: 10px;">

		<ul class="navbar-nav">

			<?php 
			if($page=='1' || $page=='home'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/graphical/index.php?a=home  "> Home </a> </li> <?php }
			
			else { ?>
			<li class="nav-item"><a class="page-link" href="http://localhost/graphical/index.php?a=home  "> Home </a> </li> <?php }
			?>

		</ul>
			
			</div>
			

			<div class="navbar-collapse" style="padding-left: 50%; "> 

				<ul class="navbar-nav">


					<?php


						if(!isset($_SESSION['login'])){
						

					

					
						if($page=='signup'){ ?>
						<li class="nav-item" > <a style="margin-right: 10px;" class="page-link active" href="http://localhost/graphical/index.php?a=signup  "> Sign Up </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a style="margin-right: 10px;" class="page-link" href="http://localhost/graphical/index.php?a=signup  "> Sign Up </a> </li><?php }
					?>


					<?php 
						if($page=='login'){ ?>
						<li class="nav-item"> <a class="page-link active" href="http://localhost/graphical/index.php?a=login  "> Login </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/graphical/index.php?a=login "> Login </a> </li><?php }


						} // condition sesh

						else{
					


						if(isset($_SESSION['login3'])){


						if($page=='profile'){ ?>
						<li class="nav-item"> <a style="margin-right: 10px;" class="page-link active" href="http://localhost/graphical/index.php?a=profile "> Profile </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a style="margin-right: 10px;" class="page-link" href="http://localhost/graphical/index.php?a=profile "> Profile </a> </li><?php }


						}

						?>



					<?php 

						if($page=='logout'){ ?>
						<li class="nav-item"> <a class="page-link active" href="http://localhost/graphical/index.php?a=logout "> Logout </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/graphical/index.php?a=logout "> Logout </a> </li><?php }


						} // else ar sesh

					?>


			</ul>
		</div>
			
		
	</div>
		
	</nav>

	

</head>
<body>

</body>
</html>