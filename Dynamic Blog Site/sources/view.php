<?php 
//session_start();

if(!isset($_SESSION['login2'])){

    header("location:./index.php?a=login");
}

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$page = $_GET['page'];


	$sql = " SELECT * FROM $page WHERE id = $id ";

	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

	$cnt = $row['count'];
	$cnt = $cnt+1;

	$dat = date("d");
	$dat2 = $row['dat2'];

	//echo $tim1." ".$tim2;

	if($dat!=$dat2){
		$cnt = 1;

		$sql= "UPDATE $page SET  dat2 = '$dat' WHERE id = $id ";
		$result = mysqli_query($conn,$sql);
	}

	$sql= "UPDATE $page SET  count = $cnt WHERE id = $id ";
	$result = mysqli_query($conn,$sql);


	$sql = " SELECT * FROM $page WHERE id = $id ";

	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<style type="text/css">
		p{
			text-align: justify;
			font-size: 20px;
		}
	</style>


</head>
<body style="background: #c6efa9;">

	<div class="container">

		<div class="row">

			<div class="col-md-1"></div>

			
			<div class="col-md-10" style="padding-top: 50px; font-size: 20px;">

				<img width="100%" height="500px" src=" <?php echo $row['image']; ?>"> <br> <br>

				<h1> <?php echo $row['title']; ?> </h1> <br>

				<h5><?php echo date("D-d-M-Y  h:i A"); ?></h5> <br>

				<p> <?php echo $row['post']; ?> </p> <br> <br>

				
			</div>




			


			<div class="col-md-1"></div>

		</div>
		
	</div>

</body>
</html>