<?php 

if(isset($_GET['id'])){

	$id = $_GET['id'];
	$page = $_GET['page'];

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
</head>
<body>

	<div class="container">

		<div class="row">

			<div class="col-md-1"></div>

			
			<div class="col-md-10" style="padding-top: 50px;">

			     <img width="100%" height="500px" src=" <?php echo "." . $row['image']; ?>"> <br> <br>

				<h1> <?php echo $row['title']; ?> </h1> <br>

				<p> <?php echo $row['post']; ?> </p> <br> <br>

				
			</div>

			


			<div class="col-md-1"></div>

		</div>
		
	</div>

</body>
</html>