<?php 
 
if(isset($_POST['delete'])){

	$id=$_GET['id'];
	$page=$_GET['page'];
	$num = $_GET['page-number'];

$sql = " SELECT * FROM $page WHERE id = $id ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

unlink($row['image']);

$sql = "DELETE FROM $page WHERE id = $id ";

$result = mysqli_query($conn,$sql);

if($result) header("Location: ./index.php?a=$page");
}

?>