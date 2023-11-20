<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<div class="container">

		<div class="row">

			<div class="col-md-1">
				
			</div>


			<div class="col-md-10">
				<br>
				<h4><?php echo date("D-d-M-Y      h:i A"); ?></h4> <br> <br>

				<h4><a class="page-link" href="http://localhost/blog/admin/বিশেষ-খবর"> বিশেষ খবর </a></h4>

				<?php 

					$page = "bnews";
					$current_page = 1;

					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>

 
			<?php } ?> <br> <br> <br> <br> <br>


			<h4><a class="page-link" href="http://localhost/blog/admin/প্রযুক্তি-খবর"> প্রযুক্তি খবর </a></h4>

				<?php 

					$page = "pnews";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>


				
			<h4><a class="page-link" href="http://localhost/blog/admin/শিক্ষার-খবর"> শিক্ষার খবর </a>

				<?php 

					$page = "study";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>


			<h4><a class="page-link active" href="http://localhost/blog/admin/টেলিকম"> টেলিকম </a></h4>

				<?php 

					$page = "telecom";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>



			<h4><a class="page-link active" href="http://localhost/blog/admin/কম্পিউটিং"> কম্পিউটিং </a></h4>

				<?php 

					$page = "computing";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>



			<h4><a class="page-link active" href="http://localhost/blog/admin/বিজ্ঞান"> বিজ্ঞান </a></h4>

				<?php 

					$page = "science";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>



			<h4><a class="page-link active" href="http://localhost/blog/admin/টিপস-এন্ড-ট্রিকস"> টিপস এন্ড ট্রিকস </a></h4>

				<?php 

					$page = "tips";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>



			<h4><a class="page-link active" href="http://localhost/blog/admin/খেলা"> খেলা </a></h4>

				<?php 

					$page = "sports";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>



			<h4><a class="page-link active" href="http://localhost/blog/admin/গল্প-কথা"> গল্প কথা </a></h4>

				<?php 

					$page = "story";
					
					$sql = " SELECT * FROM $page ORDER BY id desc limit 2 ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=".<?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>

						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?> <br> <br> <br> <br> <br>



			</div>



			<div class="col-md-2">
				
			</div>
			
		</div>
		
	</div>

</body>
</html>