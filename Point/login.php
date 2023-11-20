<?php 
    ini_set('display_errors', 'Off');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />

    <title>Login</title>
</head>
<body style=" background-image:url('img1.jpg'); background-size: 100%100%; background-attachment: fixed; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: lighten; ">
    
    <div class="container m-3 p-4 w-50 d-flex  mx-auto flex-column " style="background: #c8eebf;">
        <h2 class="p-2 m-2 text-primary text-center">User Login</h2>
        <form action="" class="form-control d-flex flex-column p-3 m-3" method="post">
            <input type="text" name="num" placeholder="Enter Your Phone Number : " class="p-2 m-2">
            <input type="password" name="password" placeholder="Enter Password" class="p-2 m-2">
            <div class="m-2">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="reset" value="Clear">
            </div>
        </form>
        <a href="./admin_login.php" class="btn btn-danger w-25 mx-auto"> Admin Login </a>
        <a href="./registration.php" class="btn btn-info mx-auto my-2 w-25"> Sign Up </a>
        <a href="./map.php" class="btn btn-success mx-auto my-2 w-25"> Bin Location </a>
    </div>

<?php



// Define the database connection variables
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'mydb';

// Create a new database connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check if the connection was successful
if ($conn) {

    if(isset($_POST['submit'])){

    // Get the form data
    $num = $_POST['num'];
    $password = $_POST['password'];

    // Prepare the SQL query
    $sql = "SELECT * FROM user WHERE num = '$num' AND password = '$password' ";

    $result2 = mysqli_query($conn,$sql);

    $row = mysqli_num_rows($result2);

    // Create a prepared statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameters
    //mysqli_stmt_bind_param($stmt, 'ss', $email, $password);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Check if the query was successful
    $result = mysqli_stmt_get_result($stmt);
    $ok = true;
    if ($result) {

        // The query was successful
        if (mysqli_num_rows($result) > 0) {

            // The user exists
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['name'];
            $point = $row['points'];

            // Create a session
            session_start();
            $_SESSION['name'] = $user_id;
            $_SESSION['point'] = $point;
            $_SESSION['user_login']=1;

            // Redirect the user to the home page
            header("Location: ./user.php");

        } else {

            // The user does not exist
            $ok = false ;

        }

    } else {

        // The query was not successful
        echo "Error querying database: " . mysqli_error($conn);

    }

  }

} else {

    // The connection was not successful
    echo "Error connecting to database: " . mysqli_connect_error();

}

if($row==0){

    $sql = "SELECT * FROM user WHERE num = '$num'  ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);

    $sql = "SELECT * FROM user WHERE password = '$password'  ";
    $result = mysqli_query($conn,$sql);
    $row2 = mysqli_num_rows($result);

    if($row){

        ?>
                        <script type="text/javascript">
                            alert("Wrong Password");
                        </script>
                        <?php
    }

    else if($row2){

        ?>
                        <script type="text/javascript">
                            alert("Wrong Number");
                        </script>
                        <?php
    }
}


// Close the database connection
mysqli_close($conn);

?>

</body>
</html>