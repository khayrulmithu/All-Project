<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	 
	<title>Blog 64</title>

</head>
<body>

<div style="width: 100%;  overflow: hidden; background-color:rgb(73, 99, 115);">

	<?php 
				$page = '1';

				if(isset($_GET['a'])){
					$page = $_GET['a'];
				}

				if(isset($_GET['b'])){
					$page = $_GET['b'];
				}

				if(isset($_GET['page'])){
					$page = $_GET['page'];
				}
	?>



	<nav class="navbar navbar-expand-lg navbar-dark" style="font-size: 13px; color: white; padding-bottom: 9px;  ">

		<div class="logo" style="padding-left: 10px; padding-right: 100px; padding-top: 0px; padding-bottom: 5px; font-size:px;">
			<a style="color: white;" href="http://localhost/blog/হোম">Blog</a>	
			</div>

		<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon" ></span>
		 </button> 


		<div class="collapse navbar-collapse" id="collapsibleNavbar">


		 <div class="navbar-collapse" style="padding-right: 10px;">

		<ul class="navbar-nav">

			<?php 
			if($page=='1'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/হোম"> হোম </a> </li> <?php }
			
			else { ?>
			<li class="nav-item"><a class="page-link" href="http://localhost/blog/হোম"> হোম </a> </li> <?php }
			?>

			<?php 
			if($page=='bnews'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/বিশেষ-খবর"> বিশেষ খবর </a> </li><?php }
			
			else { ?>
			<li class="nav-item"><a class="page-link" href="http://localhost/blog/বিশেষ-খবর"> বিশেষ খবর </a> </li><?php }
			?>

			<?php 
			if($page=='pnews'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/প্রযুক্তি-খবর"> প্রযুক্তি খবর </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/প্রযুক্তি-খবর"> প্রযুক্তি খবর </a> </li><?php }
			?>

			<?php 
			if($page=='study'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/শিক্ষার-খবর"> শিক্ষার খবর </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/শিক্ষার-খবর"> শিক্ষার খবর </a> </li><?php }
			?>

			<?php 
			if($page=='telecom'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/টেলিকম"> টেলিকম </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/টেলিকম"> টেলিকম </a> </li><?php }
			?>

			<?php 
			if($page=='computing'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/কম্পিউটিং"> কম্পিউটিং </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/কম্পিউটিং"> কম্পিউটিং </a> </li><?php }
			?>

			<?php 
			if($page=='science'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/বিজ্ঞান"> বিজ্ঞান </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/বিজ্ঞান"> বিজ্ঞান </a> </li><?php }
			?>

			<?php 
			if($page=='tips'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/টিপস-এন্ড-ট্রিকস"> টিপস এন্ড ট্রিকস </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/টিপস-এন্ড-ট্রিকস"> টিপস এন্ড ট্রিকস </a> </li><?php }
			?>

			<?php 
			if($page=='sports'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/খেলা"> খেলা </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/খেলা"> খেলা </a> </li><?php }
			?>

			<?php 
			if($page=='story'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/গল্প-কথা"> গল্প কথা </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/গল্প-কথা"> গল্প কথা </a> </li><?php }
			?>

		</ul>
			
			</div>
			

			<div class="navbar-collapse" style="padding-left: 0px;"> 

				<ul class="navbar-nav">

					<?php 
						if($page=='follow'){ ?>
						<li class="nav-item"> <a class="page-link active" href="http://localhost/blog/ফলো-করুন"> ফলো  </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/blog/ফলো-করুন"> ফলো </a> </li><?php }
					?>


					<?php 

					if(!isset($_SESSION['login2'])){
						if($page=='login'){ ?>
						<li class="nav-item"> <a class="page-link active" href="http://localhost/blog/index.php?a=login"> login </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/blog/index.php?a=login"> login </a> </li><?php }
					?>


					<?php 
						if($page=='signup'){ ?>
						<li class="nav-item"> <a class="page-link active" href="http://localhost/blog/index.php?a=signup"> signup </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/blog/index.php?a=signup"> signup </a> </li><?php }
					
					} 

					else{

						?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/blog/index.php?a=logout"> logout </a> </li>

							<?php
					}

					?>

					

			</ul>
		</div>
			
		
	</div>
		
	</nav>

</div>

</body>
</html>