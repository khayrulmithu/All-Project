<?php 
//session_start();
$chk = 0;
if($_SESSION['signup']==1 || $_SESSION['update']==1) $chk=1;
	//header("Location:./index.php");

else if($_SESSION['login1']==0)
	header("Location:./index.php?a=login");


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

			<div class="col-md-2">
				
			</div>


			<div class="col-md-8" style="text-align: center;">
				<br>
				<!-- <h4><?php echo date("D-d-M-Y      h:i A"); ?></h4> <br> <br> -->




		<?php
	

			if($_SESSION['select']==0) $_SESSION['pass']="";


			$conn = mysqli_connect('localhost','root','','graphical');

			$username=$_SESSION['username'];

			if(isset($_POST['btn'])){

				$_SESSION['pass'] = $_POST['btn'];

				$_SESSION['select']=2;
				$_SESSION['btn']=$_POST['btn'];
				$_SESSION['size']="";


			}

			else if(isset($_POST['submit'])){

				$num = $_POST['number'];

				$sql= "UPDATE image SET num = $num WHERE username = '$username' ORDER BY id DESC ";

					$result = mysqli_query($conn,$sql);

				$_SESSION['select']=1;

				if(isset($_FILES['image']['name'])){
  					$image= $_FILES['image']['name'];

  					if($image!=""){
  					$ran = rand(4456565,6456544645);

					$name=  $ran . ".jpg"  ;

					$pic = "images/" . $name;


					move_uploaded_file($_FILES['image']['tmp_name'], $pic);

					$sql= "INSERT INTO image SET username = '$username' , image = '$name' , num=$num ";

					$result = mysqli_query($conn,$sql);
				}
				}

				if(isset($_FILES['image2']['name'])){
  					$image= $_FILES['image2']['name'];

  					if($image!=""){

  					$ran = rand(4456565,6456544645);

					$name=  $ran . ".jpg"  ;

					$pic = "images/" . $name;


					move_uploaded_file($_FILES['image2']['tmp_name'], $pic);

					$sql= "INSERT INTO image SET username = '$username' , image = '$name' , num=$num ";

					$result = mysqli_query($conn,$sql);
				}
			}

				if(isset($_FILES['image3']['name'])){
  					$image= $_FILES['image3']['name'];

  					if($image!=""){

  					$ran = rand(4456565,6456544645);

					$name=  $ran . ".jpg"  ;

					$pic = "images/" . $name;


					move_uploaded_file($_FILES['image3']['tmp_name'], $pic);

					$sql= "INSERT INTO image SET username = '$username' , image = '$name', num=$num ";

					$result = mysqli_query($conn,$sql);

				}
			}

				if(isset($_FILES['image4']['name'])){
  					$image= $_FILES['image4']['name'];

  					if($image!=""){

  					$ran = rand(4456565,6456544645);

					$name=  $ran . ".jpg"  ;

					$pic = "images/" . $name;


					move_uploaded_file($_FILES['image4']['tmp_name'], $pic);

					$sql= "INSERT INTO image SET username = '$username' , image = '$name' , num=$num ";

					$result = mysqli_query($conn,$sql);
				}
			}

  				
			}

			else if(isset($_POST['btn2'])){

				$_SESSION['pass'] = $_SESSION['pass'].$_POST['btn2'];
				
				$_SESSION['size'] = $_SESSION['size'] . "k"; // k pass len baranor jonno

			}

			else if(isset($_POST['next']) || isset($_POST['skip'])){
				$len = 0;

				if(!isset($_POST['skip'])){

					$len = strlen($_SESSION['size']);

					if($len<5){

						?> <h4> <?php echo "Password must be more than four"; ?> </h4> <?php
					}
					else {
					$_SESSION['total_pass'] = $_SESSION['total_pass'] . $_SESSION['pass'];

				}
			}
			if(isset($_POST['skip']) ||  $len>4) {

				$_SESSION['pass']="";
				$_SESSION['select']=0;

				$_SESSION['login2']=1;

				header("Location:./index.php?a=segment3");

				}

		}	

			else if(isset($_POST['reset'])){
				
				$_SESSION['pass']= "" ;

				$_SESSION['size']="";
			}

		?>




<?php

if($_SESSION['select']==0 && $chk==1){ ?>

	<h2 style="font-size: 30px;">Choose your Images-1(1024x1024).jpg</h2> 
				<br> <br>
			<form action="" method="POST" enctype="multipart/form-data" style="text-align: left; font-size: 20px; width: 100%; text-align: center;" >

		    	<label>Select an Image :</label>
		      <input style="width:330px; height: 45px; margin-bottom: 20px; " type="file" name="image" > <br>
		      <label>Select an Image :</label>
		      <input style="width:330px; height: 45px; margin-bottom: 20px; " type="file" name="image2" > <br>
		      <label>Select an Image :</label>
		      <input style="width:330px; height: 45px; margin-bottom: 20px; " type="file" name="image3" > <br>
		      <label>Select an Image :</label>
		      <input style="width:330px; height: 45px; margin-bottom: 20px; " type="file" name="image4" > <br>

		      <label>Number of Splits Images n x n :</label> <br>
		      <input style="width:490px; height: 45px; margin-bottom: 20px; " type="number" placeholder="Enter 2,4,8 or 16" name="number" required > <br>

		      <button class="btn btn-info" type="submit" name="submit" style="width: 70%; margin-bottom:70px ; margin-left: 14px; height: 45px; font-size: 22px; ">
		        Submit
		      </button>

		    </form>

<?php } 

else if($_SESSION['select']==1 || $chk==0) {

	?>

	<h2 style="font-size: 30px;">Choose your Image-1</h2> 
				<br> <br>

<?php
}

?>


				<?php

				if($_SESSION['select']!=0 ||$chk==0)
				{

					$sql= "SELECT * FROM image WHERE username = '$username' ORDER BY id DESC";

					$result = mysqli_query($conn,$sql);

					//$row = mysqli_fetch_assoc($result);

					$i=1;
					$j=0;
					$index = 1;

				while($row=mysqli_fetch_assoc($result)){
				
					
					
						//$index = $i * 2 + $j;
						?>

						<form action="#first" method="POST">

						<button name="btn" value="<?php echo $row['image'] ?>" style="margin-right: 20px; margin-left: 20px; display: inline-block; padding: 0px;">
							
							<img src="images/<?php echo $row['image'] ?>" width="200px" height="200px">

						</button>

						<?php 
						if($row = mysqli_fetch_assoc($result)){ ?>
						<button name="btn" value="<?php echo $row['image'] ?>" style="margin-right: 20px; margin-left: 0px; padding: 0px;">
							
							<img src="images/<?php echo $row['image'] ?>" width="200px" height="200px">

						</button>

						<?php $index++; } ?>

						</form>

						<?php
						$index = $index + 1;
					

					
					?> <br>  <?php
					 
					if($i==2) break;

					$i = $i + 1;
				}

				?>

				<div id="first" style="margin-bottom: 60px;">
					
				</div>

				<?php

			}


			if($_SESSION['select']==2){

				$sql= "SELECT * FROM image WHERE username = '$username' ORDER BY id DESC ";

					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);

					$num = $row['num'];

					if($num==0) $num=8;


$file="images/" . $_SESSION['btn'];

$padding=0;
$info=getimagesize($file);
$width=$info[0];
$height=$info[1];

$canvasWidth=$width/$num;
$canvasHeight=$height/$num;
$output=imagecreatetruecolor($canvasWidth, $canvasHeight);
$background= imagecolorallocate($output, 255, 255, 255);
imagefill($output, 0, 0, $background);

$orig= imagecreatefromjpeg($file);

for($i=0;$i<$num;$i++){

  for($j=0;$j<$num;$j++){
    $output2 = $output;
imagecopy($output2, $orig,0,0,($j)*$width/$num,($i)*$height/$num,$width/$num,$height/$num);

$ind = $i*$num+$j;

imagejpeg($output2,"temp/imgs_$ind.jpg");

 }
 
}

$_SESSION['select']=3;

}

			if($_SESSION['select']==3){

				$sql= "SELECT * FROM image WHERE username = '$username' ORDER BY id DESC ";

					$result = mysqli_query($conn,$sql);
					$row = mysqli_fetch_assoc($result);

					$num = $row['num'];

					if($num==0) $num=8;

				for($i=0;$i<$num;$i++)
				{
					for($j=0;$j<$num;$j++)
					{
						$index = $i * $num + $j;
						?>

						<form action="#first" method="POST" style="display: inline-block;" >

						<button name="btn2" value="imgs_<?php echo $index ?>" style="margin-right: 3px; margin-bottom: 6px; padding: 0px;">
							
							<img src="temp/imgs_<?php echo $index ?>.jpg" width="<?php echo 35*(8/$num)?>px" height="<?php echo 35*(8/$num)?>px">

						</button>


						</form>

						<?php // <?php echo $_POST['btn']
					}


					?> <br> <?php
				}



				?>

				


				<form action="" method="POST" style="margin-bottom: 60px;">
					
					<br><br>

					<input disabled style="width: 50%; border: 3px solid black" type="password" name="" value="<?php echo $_SESSION['size'];?>">

					<br><br>

					<button name="next" class="button btn" style=" background: green ;width: 60px; height: 40px;">

						Next
						
					</button>

					<button name="reset" class="button btn" style=" margin-left:5px; background: red; width: 60px; height: 40px;">

						Reset
						
					</button>
					
				</form>

				
				<?php } //jodi kono image a click na kori tahole ai gulo asbe na

				?>  
				
				
				

			</div>

			<div class="col-md-2">

				<form action="" method="POST">

					<button name="skip" class="btn btn-danger" style="margin-top: 30px;">skip</button>
					
				</form>

				
				
			</div>
		
		</div>

	</div>

</body>

</html>