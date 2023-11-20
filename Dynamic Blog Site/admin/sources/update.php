
<!DOCTYPE html>
<html>
<head>

	<title></title>


</head>
<body>
<div class="container">
<div class="row">
	<div class="col-lg-2"></div>

	<div class="col-lg-8" style="text-align: center; padding-top: 50px; font-size: 25px; ">


<?php

if(isset($_POST['btn1'])){

	$id = $_GET['id'];
	$page = $_GET['page'];

	$date = $_POST['date'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$post=$_POST['post'];

	$image= $_FILES['image']['name'];

	$ran = rand(4456565,6456544645);

	$name=  $ran . $image  ;

	$pic = "../image/" . $page . "/" . $name;

	$pic2 = "./image/" . $page . "/" . $name;

	if($image){

	move_uploaded_file($_FILES['image']['tmp_name'], $pic);

	$sql= "UPDATE $page SET title = '$title' , image = '$pic2' , description = '$description', post = '$post', dat = '$date' WHERE id = $id ";
}
else $sql= "UPDATE $page SET title = '$title' , description = '$description', post = '$post', dat = '$date' WHERE id = $id ";

	$result = mysqli_query($conn,$sql);


	if($result){

		?>
			<div class=" alert alert-success" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Update!</strong> Successful.

			</div> <?php
	}

}

?>

		
<?php

		if(isset($_GET['id'])){

	$id = $_GET['id'];
	$page = $_GET['page'];
	$num = $_GET['page-number'];

	$sql = " SELECT * FROM $page WHERE id = $id ";
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);

	?>

 


		<form action="" method="POST" enctype="multipart/form-data" style="text-align: left; font-size: 20px; width: 100%;" >

			<div style="background: #8fe96f; font-size: 24px; text-align: center;" >Update Post on <?php echo $page; ?>.</div> <br> <br>

			<label>Post Title :</label>
			<input style=" width: 100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="title" required value=" <?php echo $row['title']; ?> " > <br>

			<img width="200px" height="100px" src=" <?php echo "." . $row['image']; ?> "> <br>
			<label>Select an Image :</label>
			<input style="width:330px; height: 45px; margin-bottom: 20px; " type="file" name="image" > <br>

			<label>Post Description :</label>
			<textarea style="width: 100%; height: 100px; margin-bottom: 20px; " type="text" name="description" required> <?php echo $row['description']; ?> </textarea> <br>

			<label>Full Post :</label>
			<textarea class="textarea" style="width: 100%; height: 120px; height: auto; margin-bottom: 20px; " type="text" name="post" required > <?php echo $row['post']; ?>

			 </textarea> <br>

			 <script>
                       var editor =  CKEDITOR.replace( 'post' );
                        CKFinder.setupCKEditor(editor);
             </script>

             	<label>Date : dd/mm/yyyy</label>
			<input style="width: 100%; height: 45px; margin-bottom: 20px; " type="text" name="date" required value=" <?php echo $row['dat']; ?> " > <br>

			<button class="btn btn-info" type="submit" name="btn1" style="width: 100%; margin-bottom:70px ; margin-left: 0px; margin-right: 14px; height: 45px; font-size: 22px; ">
				Update
			</button>

			
			<!-- <a href="./index.php?a=<?php echo $page; ?>&&page-number=<?php echo $num; ?>"> <button class="btn btn-success" type="button" name="back" style="width: 48%; margin-bottom:70px ; height: 45px; font-size: 22px; "> Back
			</button> </a> -->

		</form>

<?php } ?>



	</div>
	<div class="col-lg-2"></div>
</div>
</div>

</body>
</html>

