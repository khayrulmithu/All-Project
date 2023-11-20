
<?php 

if(isset($_GET['b'])){

	$page = $_GET['b'];

	$search = $_POST['name'];

	
?>


		<div class="container">

		<div class="row">
			
			<div class="col-md-1">
				
			</div>

			<div class="col-md-10" style="margin-top: 50px;">

		<!-- search and new post start -->		
	<div class="row">
	<div class="col-md-8">
		<form action="./index.php?b=<?php echo $page ?>&&a=search" method="POST" >


			<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; margin-right:15px; " type="text" name="name" required  value = "<?php echo $search ?>"  >

			<button class="btn btn-success" type="submit" name="btn1" style="width:96px; margin-bottom:14px ; height: 45px; font-size: 22px; ">
				<i class="fas fa-search"></i>
				খুঁজুন
			</button>

		</form>
	</div>

	<div class="col-md-4">
		<form action="./index.php?b=<?php echo $page ?>&&a=post" method="POST" >

			<button class="btn btn-info" type="submit" name="btn2" style="width:215px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
				<i class="fas fa-edit"></i>
				নতুন পোস্ট করুন
			</button>
			
		</form>
	</div>
 </div>
 <!-- search and new post end -->


				<!-- body start -->

				<?php 

					$sql = " SELECT * FROM $page WHERE title LIKE '%$search%' or description LIKE '%$search%' or post LIKE '%$search%'
					  ORDER BY id";

	$result = mysqli_query($conn,$sql);

	$num = mysqli_num_rows($result);

	if($num){


	while ($row=mysqli_fetch_assoc($result)) { ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php '$page' ?>">

					<img width="100%" height="200px" src=" <?php echo "." . $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">

						<form action="./index.php?a=delete&&id=<?php echo $row['id']; ?>&&page=<?php echo $page ?>" method="POST" >

							<button class="btn btn-danger" type="submit" name="delete" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-trash"></i>
								ডিলিট করুন
							</button>
			
						</form>

						<form action="./index.php?a=update&&id=<?php echo $row['id']; ?>&&page=<?php echo $page ?>&&page-number=1" method="POST" >

							<button class="btn btn-info" type="submit" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; height: 45px; font-size: 22px; ">
								<i class="fas fa-edit"></i>
								আপডেট করুন
							</button>
			
						</form>
						
					</div>

				</div>

			<?php  } }

				else { echo "Not found."; }
			 ?>


			</div>

			<div class="">
				
			</div>

		</div>
		
	</div>

<?php 		

}