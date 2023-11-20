<?php 

//session_start();

if(!isset($_SESSION['login2'])){

    header("location:./index.php?a=login");
}

$page = $_GET['a'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<style type="text/css">
		p{
			text-align: justify;
			font-size: 18px;
		}
	</style>

</head>
<body style="background: #c6efa9;">


	<div class="container">

		<div class="row">
			
			<div class="col-md-1">
				
			</div>

			<div class="col-md-10" style="margin-top: 50px;">

		<!-- search and new post start -->		
	<div class="row">

	<div class="col-md-4">
		<h4><?php echo date("D-d-M-y  h:i A"); ?></h4> <br> 
	</div>

	<div class="col-md-8">
		<form action="./index.php?b=<?php echo $page; ?>&&a=search" method="POST" >


			<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; margin-right:15px; " type="text" name="name" required placeholder =" Enter your search keyword">

			<button class="btn btn-success" type="submit" name="btn1" style="width:96px; margin-bottom:14px ; height: 45px; font-size: 22px; ">
				<i class="fas fa-search"></i>
				খুঁজুন
			</button>

		</form>
	</div>

	
 </div>
 <!-- search and new post end -->


				<!-- body start -->

				<?php 

				$limit = 5;

						$current_page=1;

						if(isset($_GET['page-number']))
							$current_page= $_GET['page-number'];


					$sql = " SELECT * FROM $page ORDER BY id desc ";
					$result = mysqli_query($conn,$sql);

					$count = mysqli_num_rows($result);

					$total_page = ceil( $count / $limit );
					$from = ($current_page * $limit) -$limit;

					//echo $from . " and " . $to; 

					if($from < 0) { $from = 0 ; $to = $limit; }

					$sql = " SELECT * FROM $page ORDER BY id desc limit $from , $limit ";
					$result = mysqli_query($conn,$sql);

					while($row=mysqli_fetch_assoc($result)){ ?>

				<div class="row" style="padding-top:50px ;">

					<div class="col-md-3">

					<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">

					<img width="100%" height="200px" src=" <?php echo $row['image']; ?>  "> </a>
					
					</div>

					<div class="col-md-8">

				<a href="./index.php?a=view&&id=<?php echo $row['id']; ?>&&page=<?php echo $page; ?>&&page-number=<?php echo $current_page; ?>">	<h2> <?php echo $row['title']; ?> </h2> </a>

					<p> <?php echo $row['description']; ?> </p>

					</div>

					<div class="col-md-1">


						<form action="#" method="POST" >

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 22px; ">

								<?php echo $row['dat']; ?>
							</button>

							<button class="btn" type="button" name="update" style="width:155px; margin-bottom:14px ; margin-left: 20px; background:#55ea65; height: 45px; font-size: 20px; ">

								<?php echo "Today View " . $row['count']; ?>
							</button>
			
						</form>

						
						
					</div>

				</div>


			<?php } ?>

			<br> <br>  <!-- pagination start -->

			<div class="row" style="font-size: 14px;">

			<div class="col-md-12" >
					<ul class="pagination" >
						
						<?php 

							if($total_page>1){ 

								if($current_page>1){ ?>
								 <li class="page-item" > <a class="page-link" style="background: #e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $current_page-1; ?>"> prev </a> </li> 
								 <?php }

							for($i=1;$i<=$total_page&&$i<=1;$i++)
							{
								if($i==$current_page){
								?> <li class="page-item"  > <a class="page-link active" style="background: ; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
								}

								else{
									?> <li class="page-item"  > <a class="page-link" style="background:#e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
								}
							}

							if($total_page>1&&$total_page<6){
								for($i=2;$i<=$total_page-1;$i++)
								{
									if($i==$current_page){
								?> <li class="page-item"  > <a class="page-link active" style="background: ; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
								}

								else{
									?> <li class="page-item"  > <a class="page-link" style="background:#e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
								}
								}
							}

							else if($total_page>5){

								if($current_page>2&&$current_page<($total_page-1))
								for($i=$current_page-1;$i<=$current_page+1;$i++)
								{
									if($i==$current_page){
									?> <li class="page-item"  > <a class="page-link active" style="background: ; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
									}

									else{
										?> <li class="page-item"  > <a class="page-link" style="background:#e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
									}
								}

								else if($current_page<5){
									for($i=2;$i<=4;$i++)
									{
											if($i==$current_page){
										?> <li class="page-item"  > <a class="page-link active" style="background: ; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
										}

										else{
											?> <li class="page-item"  > <a class="page-link" style="background:#e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
										}
									}
								}

								else if($current_page>=$total_page-3){
									for($i=$total_page-3;$i<$total_page;$i++)
									{
												if($i==$current_page){
										?> <li class="page-item"  > <a class="page-link active" style="background: ; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
										}

										else{
											?> <li class="page-item"  > <a class="page-link" style="background:#e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
										}
									}
								}

								



							}


							if($total_page>1){
								
							for($i=$total_page;$i<=$total_page;$i++)
							{
								if($i==$current_page){
								?> <li class="page-item"  > <a class="page-link active" style="background: ; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
								}

								else{
									?> <li class="page-item"  > <a class="page-link" style="background:#e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $i; ?>"> <?php echo $i; ?> </a> </li> <?php
								}
							}
						}

							 if($current_page<$total_page){ ?>
								 <li class="page-item" > <a class="page-link" style="background: #e5e0e0; margin-right: 5px;" href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $current_page+1; ?>"> next </a> </li> 
								 <?php }
						}
						?>

					</ul>
				</div>

	
			</div>  <!-- pagination end -->

				<br>



			</div>


			<div class="">
				
			</div>
			


		</div>
		
	</div>

</body>
</html>
