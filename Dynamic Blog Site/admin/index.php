
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title></title>

<link rel="stylesheet" type="text/css" href="../css/style.css">

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

if(!isset($_SESSION['login']))
	header("Location:./login.php");


//if(file_exists('table.php'))
	//header("Location:./table.php");
$conn = mysqli_connect('localhost','root','','blog');

include("sources/head.php");

if(isset($_GET['a']))
	$a=$_GET['a'];
else $a=1;

switch ($a) {
	case 'pnews':
		include("sources/pnews.php");
		break;

	case 'bnews':
		include("sources/bnews.php");
		break;

	case 'study':
		include("sources/study.php");
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

	case 'feature':
		include("sources/feature.php");
		break;

	case 'logout':
		include("sources/logout.php");
		break;

	case 'setting':
		include("sources/setting.php");
		break;

	case 'search':
		include("sources/search.php");
		break;

	case 'post':
		include("sources/post.php");
		break;

	case 'view':
		include("sources/view.php");
		break;

	case 'delete':
		include("sources/delete.php");
		break;

	case 'update':
		include("sources/update.php");
		break;

	case 'sports':
		include("sources/sports.php");
		break;

	case 'story':
		include("sources/story.php");
		break;

	
	default:
		include("sources/home.php");
		break;
}
	


?>