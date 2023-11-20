<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body style="background: #c6efa9;">

	<div class=container>

		<div class=row>
			
			<div class=col-md-3>
				
			</div>

			<div class=col-md-6 style="margin-top: 100px; text-align: center;">

				<h3 style="margin-bottom: 50px;">User Login Page</h3>


<?php

//session_start();

if( isset($_POST['login']) ){

	$name = $_POST['name'];
	$pass = $_POST['pass'];

	$conn = mysqli_connect('localhost','root','','blog');

	$sql = "SELECT * FROM user WHERE username = '$name' and pass = '$pass' ";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0){

		$_SESSION['login2']=1;
		$_SESSION['username']=$name;

		?>

		<script type="text/javascript">
			window.location.href='./index.php';
		</script>
		<?php

		//header("location:./index.php");

		//header("refresh:5; URL=http://localhost/blog");

	}
	else { ?>

		<div class=" alert alert-danger" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Wrong!</strong> Username or Password

		</div>

	<?php }
}

?>



				<form action="" method="POST" style="text-align: center; margin-top: 50px;">

					<input style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="name" required placeholder =" Enter your username"> <br>

					<input id="pa" style="width:100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="password" name="pass" placeholder ="Enter your password"> <br>


					<button id="bt" class="btn btn-success" type="submit" name="login" style="width:100%; height: 45px; font-size: 22px; ">
						Login
					</button>

					

				</form>

				
				
			</div>

			<div class=col-md-3>
				
			</div>
		</div>
		
	</div>

</body>
</html>