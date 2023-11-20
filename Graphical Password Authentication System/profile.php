<?php 
//session_start();

if(!isset($_SESSION['loginFinal']))
	header("Location:./index.php?a=login");

// else if($_SESSION['login2']==0)
// 	header("Location:./index.php");


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<div class="container">

		<div class="row">

			<div class="col-md-3">
				
			</div>


			<div class="col-md-6" style="margin-top:100px; margin-bottom: 100px; text-align: center; ">

				<i  style="font-size: 200px; " class="fas fa-user"></i> <br>
				
				<div style="font-size: 30px; margin-top: 30px;">
					Username : <?php echo $_SESSION['username'];  ?>
					<br>
					Email : <?php echo $_SESSION['email'];  ?>
				</div>

				<br>

				<div>
					
				<form action="" method="POST">


					<button name="btn1" class="button btn" style=" background: green ;width: 30%; height: 40px; font-size: 17px;">

						Change Password
						
					</button>


					<button name="btn2" class="button btn" style=" margin-left:5px; background: red; width: 30%; height: 40px; font-size: 17px;">

						Change Segment
						
					</button>
					
				</form>

				</div>

					<?php  

						if(isset($_POST['btn1'])){

							?>
							<form action="" method="POST" style="margin-top: 30px; font-size: 20px;" >

							<label>Change Your Password.</label><br>

							<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass1" required placeholder ="Enter your new password"> <br>

							<input style="width:330px; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass2" required placeholder ="Confirm your password"> <br>

							<button class="btn btn-info" type="submit" name="update" style="width:330px; height: 45px; font-size: 22px; ">
								Update
							</button>

						</form>


						<?php 
					}


					if(isset($_POST['btn2'])){

						$_SESSION['update']=1;
						$_SESSION['flag']=0;

						header("Location: ./index.php?a=segment1");
					}


					if(isset($_POST['update'])){

						$pass1=$_POST['pass1'];
						$pass2=$_POST['pass2'];

						if($pass1!=$pass2){ ?>

							<div class=" alert alert-danger" style="text-align: center; font-size: 15px;">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Password!</strong> Don't Match.

							</div> <?php

						}

						else{

							$username = $_SESSION['username'];


						$sql= "UPDATE user SET password = '$pass1' WHERE username = '$username'  ";

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
				
			</div>


			<div class="col-md-3">
				
			</div>
			
		</div>
		
	</div>
	
</body>
</html>