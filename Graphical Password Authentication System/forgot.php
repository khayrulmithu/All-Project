<?php 
//session_start();
$_SESSION['email']="k";

unset($_SESSION['sendcode']);
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

	<div style="text-align: center; margin-top: 5%; font-size: 40px; ">

		You can reset your password here.

	</div>

</head>
<body style=" background-image:url('login.jpg'); background-size: 100%100%; background-attachment: fixed; " >
<div class="container" >
<div class="row">
	<div class="col-md-3"></div>

	<div class="col-md-6" style="text-align: center; padding-top: 5%; font-size: 20px; ">


<?php 

if(isset($_POST['btn'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	//$code = $_POST['code'];

	$conn = mysqli_connect('localhost','root','','graphical');
	$sql= "SELECT * FROM user WHERE username = '$name' and email = '$email' ";

	$result = mysqli_query($conn,$sql);


	if(mysqli_num_rows($result)>0){

		$_SESSION['login'] =1;
		$_SESSION['username']=$name;
		$_SESSION['flag']=0;

		$_SESSION['signup'] = 0;
		$_SESSION['update'] = 0;

		$_SESSION['login1']=0;
		$_SESSION['login2']=0;
		$_SESSION['login3']=0;

		$_SESSION['sendcode']=1;

		$row = mysqli_fetch_assoc($result);

		$_SESSION['email'] = $row['email'];

		$num = rand(1111,9999);

		$sql = "INSERT INTO forgot set username='$name', code='$num' ";
		$result = mysqli_query($conn,$sql);
		

		//header("Location:./index.php?a=segment1");
	}
	else{
		$sql= "SELECT * FROM user";

		$result = mysqli_query($conn,$sql);

		$row = mysqli_fetch_assoc($result);

		if($row['username']!=$name and $row['password']==$pass ){

			?>
			<div class=" alert alert-danger" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Wrong!</strong> Username

			</div> <?php 
		}

		else if($row['password']!=$pass and $row['username']==$name){
			?>
			<div class=" alert alert-danger" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Wrong!</strong> Password

			</div> <?php
		}

		else{
			?>
			<div class=" alert alert-danger  alert-dismissible" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Wrong!</strong> Username & Password

			</div> <?php 
		}
	}
}

?>


		<form action="" method="POST" style="text-align: center;" >

			<input style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="name" required placeholder =" Enter your username"> <br>

			<input style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="email" required placeholder ="Enter your email"> <br>

			<?php

			if(isset($_SESSION['sendcode'])){ ?>

				<input style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="code" required placeholder ="Enter email code here"> <br>

				<?php

			}


			?>

			<button class="btn btn-success" type="submit" name="btn" style="width:100%; height: 45px; font-size: 22px; ">
				send code
			</button>

		</form>

		

	</div>
	<div class="col-md-3"></div>
</div>
</div>

</body>
</html>

