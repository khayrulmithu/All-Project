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
    <title>Admin Login</title>
</head>
<body style=" background-image:url('img4.jpg'); background-size: 100%100%; background-attachment: fixed; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: lighten; ">


<?php 

if(isset($_POST['submit'])){

 $password = $_POST['password'];

 if($password == "admin")
 {
    session_start();
    
    $_SESSION['login']=1;
    $_SESSION['state']=0;
    header("Location:./admin.php");
 }

}

?>



    <div class="container m-3 p-4 w-50 d-flex mx-auto flex-column" style="background: #c8eebf;">
        <h2 style="" class="p-2 m-2 text-center">Admin Login</h2>


        <form action="" class="form-control d-flex flex-column p-3 m-3" method="POST">
            <input type="password" name="password" placeholder="Enter Password" class="p-2 m-2">
            <div class="m-2">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="reset" value="Clear">
            </div>
        </form>


        <a href="./login.php" class="btn btn-danger mx-auto w-25"> User Login </a>
        <a href="./registration.php" class="btn btn-info mx-auto my-2 w-25"> Sign Up </a>
    </div>
</body>
</html>