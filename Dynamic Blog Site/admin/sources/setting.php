<!DOCTYPE html>
<html>
<head>

	<title></title>


</head>
<body>
<div class="container">
<div class="row">
	<div class="col-lg-4"></div>

	<div class="col-lg-4" style="text-align: center; padding-top: 70px; font-size: 25px; ">


<?php 

if(isset($_POST['btn1'])){

	$name=$_POST['name'];

	$sql= "UPDATE user SET username = '$name' ";

	$result = mysqli_query($conn,$sql);


	if($result){

		?>
			<div class=" alert alert-success" style="text-align: center; font-size: 15px; width:350px;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Update!</strong> Username Successful.

			</div> <?php
	}

}

?>


		<form action="" method="POST" >

			<label>Change Your User Name.</label> <br>

			<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="name" required placeholder =" Enter your new username"> <br>

			<button class="btn btn-success" type="submit" name="btn1" style="width:330px; margin-bottom:70px ; height: 45px; font-size: 22px; ">
				Update
			</button>

		</form>


<?php 

if(isset($_POST['btn2'])){

	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];

	if($pass1!=$pass2){ ?>

		<div class=" alert alert-danger" style="text-align: center; font-size: 15px;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Password!</strong> Don't Match.

		</div> <?php

	}

	else{


	$sql= "UPDATE user SET password = '$pass1' ";

	$result = mysqli_query($conn,$sql);


	if($result){

		?>
			<div class=" alert alert-info" style="text-align: center; font-size: 15px; ">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Update!</strong> Password Successful.

			</div> <?php
	}

  }

}

?>


		<form action="" method="POST" >

			<label>Change Your Password.</label><br>

			<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass1" required placeholder ="Enter your new password"> <br>

			<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass2" required placeholder ="Confirm your password"> <br>

			<button class="btn btn-info" type="submit" name="btn2" style="width:330px; height: 45px; font-size: 22px; margin-bottom: 50px; ">
				Update
			</button>

		</form>

	</div>
	<div class="col-lg-4"></div>
</div>
</div>

</body>
</html>

