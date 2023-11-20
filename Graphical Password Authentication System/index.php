
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title></title>

<link rel="stylesheet" type="text/css" href="./css/style.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

<script src="../ckeditor/ckeditor.js"></script>

<script src="../ckfinder/ckfinder.js"></script>


</head>
<body>

</body>
</html>

<?php 
date_default_timezone_set("Asia/Dhaka");
session_start();


//if(file_exists('table.php'))
	//header("Location:./table.php");
$conn = mysqli_connect('localhost','root','','blog');

include("./head.php");

if(isset($_GET['a']))
	$a=$_GET['a'];
else $a=1;

switch ($a) {

	case 'signup':
		include("./signup.php");
		break;

	case 'login':
		include("./login.php");
		break;


	case 'logout':
		include("./logout.php");
		break;

	case 'segment1':
		include("segment1.php");
		break;

	case 'segment2':
		include("segment2.php");
		break;

	case 'segment3':
		include("segment3.php");
		break;

	case 'profile':
		include("profile.php");
		break;

	case 'forgot':
		include("forgot.php");
		break;


	
	default:
		include("./home.php");
		break;
}


include("./footer.php");
	


?>