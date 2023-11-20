<?php 
$page = $_GET['b'];
?>

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


	$title=$_POST['title'];
	$description=$_POST['description'];
	$post=$_POST['post'];

	$image= $_FILES['image']['name'];
	//$date = $_POST['date'];
	$date = date("d/m/Y");
	$dat2 = date("d");

	$page = $_GET['b'];

	$ran = rand(4456565,6456544645);

	$name=  $ran . $image  ;

	$pic = "../image/" . $page . "/" . $name;

	$pic2 = "./image/" . $page . "/" . $name;

	move_uploaded_file($_FILES['image']['tmp_name'], $pic);

	$sql= "INSERT INTO $page SET title = '$title' , image = '$pic2' , description = '$description', post = '$post', dat = '$date',count=0, dat2='$dat2' ";

	$result = mysqli_query($conn,$sql);


	if($result){

		?>
			<div class=" alert alert-success" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Add!</strong> New Post Successful.

			</div> <?php
	}
	else{

		?>
			<div class=" alert alert-danger" style="text-align: center; font-size: 15px; width:100%;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Failed!</strong> to Add New Post.

			</div> <?php

	}

}

?>


		<form action="" method="POST" enctype="multipart/form-data" style="text-align: left; font-size: 20px; width: 100%;" >

			<div style="background: #8fe96f; font-size: 24px; text-align: center;" >Add New Post on <?php echo $page; ?>.</div> <br> <br>

			<label>Post Title :</label>
			<input style=" width: 100%; height: 45px; font-size: 22px; margin-bottom: 20px; " type="text" name="title" required placeholder =""> <br>

			<label>Select an Image :</label>
			<input style="width:330px; height: 45px; margin-bottom: 20px; " type="file" name="image" required> <br>

			<label>Post Description :</label>
			<textarea style="width: 100%; height: 130px; margin-bottom: 20px; " type="text" name="description" required placeholder =""> </textarea> <br>

			<label>Full Post :</label>
			<textarea class="textarea" style="width: 100%; height: 120px; height: auto; margin-bottom: 20px; " type="text" name="post" required placeholder =" Write full post">

			 </textarea> <br>

			 <script>
                       var editor = CKEDITOR.replace( 'post' );
                        CKFinder.setupCKEditor(editor);
             </script>

            <!-- <label>Date : dd/mm/yyyy</label>
			<input style="width: 100%; height: 45px; margin-bottom: 20px; " type="text" name="date" required value="24/09/2021" placeholder ="24-10-21"> <br>  -->

			<button class="btn btn-info" type="submit" name="btn1" style="width: 30%; margin-bottom:70px ; margin-left: 14px; height: 45px; font-size: 22px; ">
				Post
			</button>

			<button class="btn btn-danger" type="Reset" name="btn2" style="width: 31%; margin-bottom:70px ; height: 45px; font-size: 22px; ">
				Reset
			</button>

			<a href="./index.php?a=<?php echo $page; ?>"> <button class="btn btn-success" type="button" name="back" style="width: 31%; margin-bottom:70px ; height: 45px; font-size: 22px; "> Back
			</button> </a>

		</form>




	</div>
	<div class="col-lg-2"></div>
</div>
</div>

</body>
</html>

