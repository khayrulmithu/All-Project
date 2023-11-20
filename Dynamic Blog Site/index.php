<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title></title>

<link rel="stylesheet" type="text/css" href="./css/style.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php 

 session_start();

 include("sources/head.php"); 

 ?>

</head>
 
<body>

<?php 



date_default_timezone_set("Asia/Dhaka");

//if(file_exists('table.php'))
	//header("Location:./table.php");

$conn = mysqli_connect('localhost','root','','blog');


if(isset($_GET['a']))
	$a=$_GET['a'];
else $a=1;

switch ($a) {

	case 'bnews':
		include("sources/bnews.php");
		break;

	case 'pnews':
		include("sources/pnews.php");
		break;

	case 'study':
		include("sources/study.php");
		break;

	case 'newp':
		include("sources/newp.php");
		break;

	case 'telecom':
		include("sources/telecom.php");
		break;

	case 'computing':
		include("sources/computing.php");
		break;

	case 'science':
		include("sources/science.php");
		break;

	case 'tips':
		include("sources/tips.php");
		break;

	case 'sports':
		include("sources/sports.php");
		break;

	case 'story':
		include("sources/story.php");
		break;

	case 'feature':
		include("sources/feature.php");
		break;

	case 'follow':
		include("sources/follow.php");
		break;

	case 'search':
		include("sources/search.php");
		break;

	case 'view':
		include("sources/view.php");
		break;

	case 'login':
		include("sources/login.php");
		break;

	case 'signup':
		include("sources/signup.php");
		break;

	case 'logout':
		include("sources/logout.php");
		break;

	
	default:
		include("sources/home.php");
		break;
}


	

?>


	

</body>
<footer >
	<?php include("sources/footer.php");  ?>
</footer>
</html>