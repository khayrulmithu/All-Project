<?php 
//session_start();

$chk = 0;

if($_SESSION['signup']==1 || $_SESSION['update']==1) $chk=1;
	//header("Location:./index.php");

else if($_SESSION['login']==0)
	header("Location:./index.php");


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

			<div class="col-md-3">
				
			</div>


			<div class="col-md-6" style="text-align: center;">
				<br>
				<!-- <h4><?php echo date("D-d-M-Y      h:i A"); ?></h4> <br> <br> -->

				<h2 style="font-size: 30px;">Choose your colour</h2> 
				<br> <br>


		<?php 

			if($_SESSION['flag']==0 ) { $_SESSION['temp']=""; $_SESSION['pass']=""; $_SESSION['total_pass']=""; }
			

			$_SESSION['flag']=1;

			$conn = mysqli_connect('localhost','root','','graphical');

			$username=$_SESSION['username'];

			if(isset($_POST['color'])){

				$name = $_POST['color'];

				$_SESSION['pass']= $_SESSION['pass'] . $name ;
				$_SESSION['temp'] = $_SESSION['temp'] . "k";
			}

			if(isset($_POST['red'])){

				$_SESSION['pass']= $_SESSION['pass'] . "r" ;

			}

			else if(isset($_POST['green'])){
				
				$_SESSION['pass']= $_SESSION['pass'] . "g" ;
			}

			else if(isset($_POST['blue'])){
				
				$_SESSION['pass']= $_SESSION['pass'] . "b" ;
			}

			else if(isset($_POST['next'])){

				$len = strlen($_SESSION['temp']);

					if($len<5){

						?> <h4> <?php echo "Password must be more than four"; ?> </h4> <?php
					}

					else{
				

				$_SESSION['total_pass'] = $_SESSION['total_pass'] . $_SESSION['pass'];
				
				$_SESSION['pass']="";

				$_SESSION['login1']=1;

				//$sql="INSERT INTO password SET username='$username',pass= '$pass' ";
				//$result=mysqli_query($conn,$sql);

				$_SESSION['select']=0;

				header("Location:./index.php?a=segment2");
				
				}	
			}

			else if(isset($_POST['reset'])){
				
				$_SESSION['pass']= "" ;
				$_SESSION['temp']= "";
			}

// color select ar kaj suru
			else if(isset($_POST['submit'])){

				$_SESSION['select']=1;


				if(isset($_POST['image'])){

					$name = $_POST['image'];

					$sql= "INSERT INTO color SET username = '$username' , color = '$name' ";

					$result = mysqli_query($conn,$sql);
				}

				if(isset($_POST['image2'])){

					$name = $_POST['image2'];

					$sql= "INSERT INTO color SET username = '$username' , color = '$name' ";

					$result = mysqli_query($conn,$sql);
				}

				if(isset($_POST['image3'])){

					$name = $_POST['image3'];

					$sql= "INSERT INTO color SET username = '$username' , color = '$name' ";

					$result = mysqli_query($conn,$sql);
				}

				if(isset($_POST['image4'])){

					$name = $_POST['image4'];

					$sql= "INSERT INTO color SET username = '$username' , color = '$name' ";

					$result = mysqli_query($conn,$sql);
				}


			}

		?>


		<?php

		if($_SESSION['select']==1 ||$chk==0){

				$sql= "SELECT * FROM color WHERE username = '$username' ORDER BY id desc";

					$result = mysqli_query($conn,$sql);

					

			?>


				<form action="" method="POST">

				<?php	if($row=mysqli_fetch_assoc($result)) { ?>
					<button name="color" value="<?php echo $row['color'];?>" class="button btn" style="background-color: <?php echo $row['color']?>; border-radius:100% ; width: 60px; height: 60px;">
					
					</button>
				<?php } ?>

				<?php	if($row=mysqli_fetch_assoc($result)) { ?>
					<button name="color" value="<?php echo $row['color'];?>" class="button btn" style="background-color: <?php echo $row['color']?>; border-radius:100% ; width: 60px; height: 60px;">
					
					</button>
				<?php } ?>

					<?php	if($row=mysqli_fetch_assoc($result)) { ?>
					<button name="color" value="<?php echo $row['color'];?>" class="button btn" style="background-color: <?php echo $row['color']?>; border-radius:100% ; width: 60px; height: 60px;">
					
					</button>
				<?php } ?>

				<?php	if($row=mysqli_fetch_assoc($result)) { ?>
					<button name="color" value="<?php echo $row['color'];?>" class="button btn" style="background-color: <?php echo $row['color']?>; border-radius:100% ; width: 60px; height: 60px;">
					
					</button>
				<?php } ?>

					<br><br>

					<input disabled type="password" name="" value="<?php echo $_SESSION['temp'];?>">

					<br><br>

					<button name="next" class="button btn" style=" background: green ;width: 60px; height: 40px;">

						Next
						
					</button>

					<button name="reset" class="button btn" style=" margin-left:5px; background: red; width: 60px; height: 40px;">

						Reset
						
					</button>
					
				</form>
				
			<?php }

			else if($chk==1) { 


				?>


		<form action="" method="POST" enctype="multipart/form-data" style="text-align: left; font-size: 20px; width: 100%; text-align: center;" >

		      <label>Select a Color :</label>
		      <input style="width:130px; height: 40px; margin-bottom: 20px; " type="color" name="image" required> <br>
		      <label>Select a Color :</label>
		      <input style="width:130px; height: 40px; margin-bottom: 20px; " type="color" name="image2" > <br>
		      <label>Select a Color :</label>
		      <input style="width:130px; height: 40px; margin-bottom: 20px; " type="color" name="image3" > <br>
		      <label>Select a Color :</label>
		      <input style="width:130px; height: 40px; margin-bottom: 20px; " type="color" name="image4" > <br>

		      <button class="btn btn-info" type="submit" name="submit" style="width: 70%; margin-bottom:70px ; margin-left: 14px; height: 45px; font-size: 22px; ">
		        Submit
		      </button>

		    </form>





			<?php


		} ?>
				

			</div>

			<div class="col-md-2">
				
			</div>
		
		</div>

	</div>

</body>

</html>