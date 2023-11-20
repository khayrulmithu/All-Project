<?php 
session_start();

if(isset($_SESSION['login']))
	header("Location:./index.php");

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<title>Admin Login Page</title>

	<div style="text-align: center; font-size: 40px; background: #c5ae32;">

		Admin Login Page

	</div>

</head>
<body>
<div class="container">
<div class="row">
	<div class="col-md-4"></div>

	<div class="col-md-4" style="text-align: center; padding-top: 200px; font-size: 25px; ">


<?php 

if(isset($_POST['btn'])){

	$name=$_POST['name'];
	$pass=$_POST['pass'];

	$conn = mysqli_connect('localhost','root','','blog');
	$sql= "SELECT * FROM user WHERE username = '$name' and pass = '$pass' ";

	$result = mysqli_query($conn,$sql);


	if(mysqli_num_rows($result)>0){

		$_SESSION['login'] =1;

		header("Location:./index.php");
	}
	else{
		$sql= "SELECT * FROM user";

		$result = mysqli_query($conn,$sql);

		$row = mysqli_fetch_assoc($result);

		if($row['username']!=$name and $row['pass']==$pass ){

			?>
			<div class=" alert alert-danger" style="text-align: center; font-size: 15px; width:350px;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Wrong!</strong> Username

			</div> <?php 
		}

		else if($row['pass']!=$pass and $row['username']==$name){
			?>
			<div class=" alert alert-danger" style="text-align: center; font-size: 15px; width:350px;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Wrong!</strong> Password

			</div> <?php 
		}

		else{
			?>
			<div class=" alert alert-danger  alert-dismissible" style="text-align: center; font-size: 15px; width:350px;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Wrong!</strong> Username & Password

			</div> <?php 
		}
	}
}

?>


		<form action="" method="POST" >

			<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="name" required placeholder =" Enter your username"> <br>

			<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass" required placeholder ="Enter your password"> <br>

			<button class="btn btn-success" type="submit" name="btn" style="width:330px; height: 45px; font-size: 22px; ">
				Login
			</button>

		</form>

	</div>
	<div class="col-md-4"></div>
</div>
</div>

</body>
</html>

