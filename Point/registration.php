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
    <title>Login</title>
</head>
<body style=" background-image:url('img3.jpg'); background-size: 100%100%; background-attachment: fixed; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: lighten; ">
    <div class="container m-3 p-4 w-50 d-flex mx-auto flex-column">
        <h2 style="color: black;" class="p-2 m-2  text-center">Registration Form</h2>



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
        $name = $_POST['name'];
        $num = $_POST['num'];
        $nid = $_POST['nid'];
        $password = $_POST['password'];

        $len = strlen($num);

        if($len!=11){
                    ?>
                        <script type="text/javascript">
                            alert("Invalid Number");
                        </script>
                        <?php
                }
        else{

            $f=0;
                    for($i=0;$i<$len;$i++){

                        if($num[$i]<'0' ||  $num[$i]>'9') $f=1;
                        else if($num[0]!='0'){
                             $f=1;
                        }
                        else if($num[1]!='1'){
                             $f=1;
                        }
                        else if($num[2]=='0' || $num[2]=='1' || $num[2]=='2' ) $f=1;
                    }

                    if($f==1){
                        ?>
                        <script type="text/javascript">
                            alert("Invalid Number");
                        </script>
                        <?php
                    }

                    else{


                    

        // Prepare the SQL query
        $sql = "INSERT INTO user (name, num, nid, password, points) VALUES ('$name','$num','$nid', '$password', '0')";

        // Create a prepared statement
        $stmt = mysqli_prepare($conn, $sql);

        // Bind the parameters
        //mysqli_stmt_bind_param($stmt, 'sss', $name, $email,$password);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Check if the query was successful
        if (mysqli_stmt_affected_rows($stmt) > 0) {

            // The query was successful
            //echo "Data inserted successfully";

            ?>

            <script type="text/javascript">
                alert("Registration Successful");
            </script>


            <?php
            header("refresh:1");

        } else {

            // The query was not successful
            echo "Error inserting data: " . mysqli_error($conn);

        }

    }

     }
        }

    } 


    else {

        // The connection was not successful
        echo "Error connecting to database: " . mysqli_connect_error();

    }

    // Close the database connection
    mysqli_close($conn);

    ?>





        <form action="" class="form-control d-flex flex-column p-3 m-3" method="post">
            <input type="text" name="name" placeholder="Enter Your Name : " class="p-2 m-2" required>
            <input type="text" name="num" placeholder="Enter Your Phone Number : " class="p-2 m-2" required>
            <input type="number" name="nid" placeholder="Enter Your NID Number : " class="p-2 m-2" required>
            <input type="password" name="password" placeholder="Enter Password" class="p-2 m-2" required>
            <div class="m-2">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="reset" value="Clear">
            </div>
            <a href="./admin_login.php" class="btn btn-warning w-50 mx-auto"> Admin Login </a>
            <a href="./login.php" class="btn btn-info my-2 w-50 mx-auto"> User Login </a>
        </form>
    </div>
    

</body>
</html>