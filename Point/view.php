<?php 
session_start();
    ini_set('display_errors', 'Off');

    session_start();

    if(!isset($_SESSION['login']))
        header("Location:./admin_login.php");


    $name = $_GET["id"];

    $conn = mysqli_connect('localhost', 'root', '', 'mydb');

    $sql = " SELECT * FROM user WHERE name = '$name' ";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

    $point5 = $row['points'];


    $sql = " SELECT * FROM points WHERE name = '$name' ORDER BY id desc limit 50 ";

    $result2 = mysqli_query($conn,$sql);
?> 



<?php 

// Define the database connection variables
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'mydb';

// Create a new database connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$id = $_GET["id2"];

if(isset($_POST['submit'])){

 // Get the point value from user input
$point = $_POST['point'];

$sql = " SELECT * FROM user WHERE id = '$id' ";
$result3 = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result3);

$name = $row['name'];

$dat = date('d-m-y');

$sql = "INSERT INTO points (name,points,cat,dat) values('$name', $point , 'Admin', '$dat') ";

$result3 = mysqli_query($conn, $sql);

$point = $point + $row['points'];
$point5 = $point;

// Update the point value in the table
$sql = "UPDATE user SET points = $point where id = '$id'";

if (mysqli_query($conn, $sql)) {
    //echo "Update Successful";
    //header("refresh:1");
    ?>

            <script type="text/javascript">
                alert("Update Successful");
            </script>


            <?php
            header("refresh:1");
} else {
    echo "Error updating point value: " . mysqli_error($conn);
}

}



else if(isset($_POST['submit2'])){

 // Get the point value from user input
$point = $_POST['point'];


$sql = " SELECT * FROM user WHERE id = '$id' ";
$result3 = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result3);

if($point>$row['points']){

    ?>
                        <script type="text/javascript">
                            alert("Insufficient Points");
                        </script>
                        <?php
                        header("refresh:1");
}

else{

$point = -$point;

$name = $row['name'];

$dat = date('d-m-y');

$sql = "INSERT INTO points (name,points,cat,dat) values('$name', $point , 'Admin', '$dat') ";

$result3 = mysqli_query($conn, $sql);


$point = $point + $row['points'];
$point5 = $point;

// Update the point value in the table
$sql = "UPDATE user SET points = $point where id = '$id'";

if (mysqli_query($conn, $sql)) {
    //echo "Update Successful";
    //header("refresh:1");
    ?>

            <script type="text/javascript">
                alert("Update Successful");
            </script>


            <?php
            header("refresh:1");
} else {
    echo "Error updating point value: " . mysqli_error($conn);
}

}

}

//mysqli_stmt_close($stmt);

//mysqli_close($conn);

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body style=" background-image:url('img2.jpg'); background-size: 100%100%; background-attachment: fixed; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: lighten; ">

    <div class="row">

        <div class="col-md-6">

            <div class="m-4 p-">
        
        <div style="background: #008cca; color: white;" class="container m-3 p-4 w-5 d-flex mx-auto flex-column border border-2 text-center">
            <h2 class="text-center ">User Point Status</h2> <br>
        <h4>Name : <?php echo $name ?> </h4>
        <h4>Point : <?php echo $point5 ?>  </h4> <br>
        <a href="./admin.php" class="btn btn-warning mx-auto">Back
        </a>
        </div>
       
   </div>


   <div class="m-4 p-">
        
        <div style="background:#10d377; color: white;" class="container m-3 p-4 w-5 d-flex mx-auto flex-column border border-2 text-center">
       <h2>Update Points</h2><hr>
       <form action="" class="  p-3 m-3" method="post">
            <input class="p-2 mx-2" style="width: 300px;" type="number" name="point" placeholder="Enter Points" required> <br> <br>
            <input class="p-2 mx-2 btn btn-success" type="submit" name="submit" value="Increment">
            <input class="p-2 mx-2 btn btn-warning" type="submit" name="submit2" value="Decrement">
            <input class="p-2 mx-2 btn btn-danger" type="reset" value="Reset">
            <!-- <a href="./admin.php" class="p-2 btn btn-info">Go To Admin</a> -->
       </form>
    </div>
       
   </div>

            
        </div>

        <div class="col-md-6">

            <div class="m-4 p-">
        
        <div style="background: #d9dbe5;" class="container m-3 p-4 w-5 d-flex mx-auto flex-column border border-2 text-center">
            <h2 class="text-center">User Point History</h2> <br>
        
            <table class="table">

                <tr>
                <th>No.</th>
                <th>Increment/Decrement</th>
                <th>Category</th>
                <th>Date</th>
                </tr>

                <?php

                $id =1;

                while($row = mysqli_fetch_assoc($result2)){ ?>

                    <tr>

                        <td> <?php echo $id ?></td>
                        <td> <?php echo $row['points']?> </td>
                        <td> <?php echo $row['cat']?> </td>
                        <td> <?php echo $row['dat']?> </td>

                    </tr>

                <?php $id++; }
                ?>

                
            </table>


        </div>
       
   </div>
            
        </div>
        
    </div>
   
    

</body>
</html>









