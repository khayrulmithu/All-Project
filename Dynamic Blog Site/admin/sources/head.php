<!DOCTYPE html>
<html>
<head>


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

	<style>

</style>

	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	 
	<title>Blog 64</title>

	<nav class="navbar navbar-expand-lg navbar-dark" style="font-size: 13px; color: white; padding-bottom: 9px; background:rgb(90, 112, 126);">

		<div class="logo" style="padding-left: 10px; padding-right: 100px; padding-top: 0px; padding-bottom: 5px; font-size:px;">
				Blog Admin
			</div>

		<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon" ></span>
		 </button> 


		<div class="collapse navbar-collapse" id="collapsibleNavbar">


		 <div class="navbar-collapse" style="padding-right: 10px;">

		<ul class="navbar-nav">

			<?php 
			if($page=='1'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/হোম"> হোম </a> </li> <?php }
			
			else { ?>
			<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/হোম"> হোম </a> </li> <?php }
			?>

			<?php 
			if($page=='bnews'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/বিশেষ-খবর"> বিশেষ খবর </a> </li><?php }
			
			else { ?>
			<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/বিশেষ-খবর"> বিশেষ খবর </a> </li><?php }
			?>

			<?php 
			if($page=='pnews'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/প্রযুক্তি-খবর"> প্রযুক্তি খবর </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/প্রযুক্তি-খবর"> প্রযুক্তি খবর </a> </li><?php }
			?>

			<?php 
			if($page=='study'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/শিক্ষার-খবর"> শিক্ষার খবর </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/শিক্ষার-খবর"> শিক্ষার খবর </a> </li><?php }
			?>

			<?php 
			if($page=='telecom'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/টেলিকম"> টেলিকম </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/টেলিকম"> টেলিকম </a> </li><?php }
			?>

			<?php 
			if($page=='computing'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/কম্পিউটিং"> কম্পিউটিং </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/কম্পিউটিং"> কম্পিউটিং </a> </li><?php }
			?>

			<?php 
			if($page=='science'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/বিজ্ঞান"> বিজ্ঞান </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/বিজ্ঞান"> বিজ্ঞান </a> </li><?php }
			?>

			<?php 
			if($page=='tips'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/টিপস-এন্ড-ট্রিকস"> টিপস এন্ড ট্রিকস </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/টিপস-এন্ড-ট্রিকস"> টিপস এন্ড ট্রিকস </a> </li><?php }
			?>

			<?php 
			if($page=='sports'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/খেলা"> খেলা </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/খেলা"> খেলা </a> </li><?php }
			?>

			<?php 
			if($page=='story'){ ?>
			<li class="nav-item"><a class="page-link active" href="http://localhost/blog/admin/গল্প-কথা"> গল্প কথা </a> </li><?php }
			
			else { ?>
				<li class="nav-item"><a class="page-link" href="http://localhost/blog/admin/গল্প-কথা"> গল্প কথা </a> </li><?php }
			?>

		</ul>
			
			</div>
			

			<div class="navbar-collapse" style="padding-left: 0px;"> 

				<ul class="navbar-nav">

					<?php 
						if($page=='setting'){ ?>
						<li class="nav-item"> <a class="page-link active" href="http://localhost/blog/admin/সেটিং"> সেটিং </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/blog/admin/সেটিং"> সেটিং </a> </li><?php }
					?>

					<?php 
						if($page=='logout'){ ?>
						<li class="nav-item"> <a class="page-link active" href="http://localhost/blog/admin/লগ-আউট"> লগ আউট </a> </li><?php }
			
						else { ?>
							<li class="nav-item"> <a class="page-link" href="http://localhost/blog/admin/লগ-আউট"> লগ আউট </a> </li><?php }
					?>


			</ul>
		</div>
			
		
	</div>
		
	</nav>

	

</head>
<body>

</body>
</html>