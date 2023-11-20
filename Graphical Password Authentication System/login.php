<?php 
//session_start();
$_SESSION['email']="k";
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

 <script src="//code.jquery.com/jquery-3.6.4.min.js"></script>


	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<title>Admin Login Page</title>

	<div style="text-align: center; color: white; margin-top: 5%; font-size: 40px; ">

		Login to your account

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
	$pass=$_POST['pass'];

	$conn = mysqli_connect('localhost','root','','graphical');
	$sql= "SELECT * FROM user WHERE username = '$name' and password = '$pass' ";

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

		$_SESSION['select']=0;

		$row = mysqli_fetch_assoc($result);

		$_SESSION['email'] = $row['email'];

		$_SESSION['login3']=1;
		$_SESSION['loginFinal']=1;

		header("Location:./index.php?a=profile");
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

else if(isset($_POST['btn2'])){

	$name=$_POST['name'];

	$conn = mysqli_connect('localhost','root','','graphical');
	$sql= "SELECT * FROM user WHERE username = '$name' ";

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

		$_SESSION['select']=0;

		$row = mysqli_fetch_assoc($result);

		$_SESSION['email'] = $row['email'];

		header("Location:./index.php?a=segment1");

	}

	else{

		?>
			<div class=" alert alert-danger  alert-dismissible" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			Username  <strong>not Found!</strong>

			</div> <?php
	}


}

?>


<script>
	
 function sel() {
 	
 	var item = document.getElementById("sel");

 	if(item.value=="pass1"){

 		var pa = document.getElementById("pa");

 		//pa.style.visibility="visible";
 		var para = document.getElementById("para");
 		var para2 = document.createElement("input");
 		para2.type="password";
 		para2.placeholder ="Enter your password";
 		para2.style.width="100%";
 		para2.style.height="45px";
 		para2.style.fontSize="22px";
 		para2.name="pass";
 		para2.id="pa";
 		para2.style.marginBottom="20px";

 		para.appendChild(para2);


 		var bt = document.getElementById("bt");
 		bt.name="btn";


 	}

 	else {

 		var pa = document.getElementById("pa");

 		//pa.style.visibility="hidden";
 		pa.remove();

 		var bt = document.getElementById("bt");
 		bt.name="btn2";
 	}

 }

</script>


		<div>
			<select onchange="sel()" id="sel" name="passType" style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; ">
				<option  value="pass1">Text Password</option>
				<option value="pass2">Graphical Password</option>
			</select>
		</div>


		<form action="" method="POST" style="text-align: center;" >

			<input style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="name" required placeholder =" Enter your username">

			<p id = "para">
			<input id="pa" style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass" placeholder ="Enter your password"> </p>


			<button id="bt" class="btn btn-success" type="submit" name="btn" style="width:100%; height: 45px; font-size: 22px; ">
				Login
			</button>

		</form>

		<div style="text-align: right; margin-bottom: 50px;">
			<a style="color: white;"  href=""></a>
		</div>

		

	</div>
	<div class="col-md-3"></div>
</div>
</div>

</body>
</html>

