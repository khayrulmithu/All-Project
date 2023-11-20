<?php 
session_start();
    ini_set('display_errors', 'Off');

    session_start();

    if(!isset($_SESSION['login']))
        header("Location:./admin_login.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body style=" background-image:url('img4.jpg'); background-size: 100%100%; background-attachment: fixed; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: lighten; ">
   
    <div style="background-color: white;" class="container m-3 p-4 w-75 d-flex mx-auto flex-column border border-2 text-center">
       <h2>Update Points</h2><hr>
       <form action="" class="d-flex form-control p-3 m-3" method="post">
            <input class="p-2 mx-2" type="number" name="point" placeholder="Enter Points" required>
            <input class="p-2 mx-2 btn btn-success" type="submit" name="submit" value="Submit">
            <input class="p-2 mx-2 btn btn-danger" type="reset" value="Reset">
            <a href="./admin.php" class="p-2 btn btn-info">Go To Admin</a>
       </form>
    </div>
</body>
</html>

<?php 

// Define the database connection variables
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'mydb';

// Create a new database connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$id = $_GET["id"];

if(isset($_POST['submit'])){

 // Get the point value from user input
$point = $_POST['point'];

$sql = " SELECT * FROM user WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$name = $row['name'];

$dat = date('d-m-y');

$sql = "INSERT INTO points (name,points,cat,dat) values('$name', $point , 'Admin', '$dat') ";

$result = mysqli_query($conn, $sql);

$point = $point + $row['points'];

// Update the point value in the table
$sql = "UPDATE user SET points = $point where id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error updating point value: " . mysqli_error($conn);
}



mysqli_stmt_close($stmt);


}
mysqli_close($conn);

?>




