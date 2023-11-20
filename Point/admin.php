<?php 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    
    <title>Admin</title>
</head>
<body style=" background-image:url('img4.jpg'); background-size: 100%100%; background-attachment: fixed; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: lighten; ">
    <div style="background-color: white;" class="container m-3 p-4 w-75 d-flex mx-auto flex-column border border-2 text-center">
       <h2>ADMIN PANEL</h2><hr>
  
    <?php



        // Connect to the database
        $db = new mysqli('localhost', 'root', '', 'mydb');

        // Get the table name
        $table_name = 'user';

        // Get all the rows from the table
        $sql = "SELECT * FROM user";
        $result = $db->query($sql);
        echo '<table class="container table-bordered w-75 p-2 text-center">';
        // Loop through the results and output each row
        ?> 
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>NID Number</th>
            <th>Points</th>
            <th>Delete</th>
            <th>User History</th>
        </tr>
        <?php
        $no = 1;

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';

            ?> <td> <?php echo $no;?> </td> <?php
            ?> <td> <?php echo $row['name'];?> </td> <?php
            ?> <td> <?php echo $row['num'];?> </td> <?php
            ?> <td> <?php echo $row['nid'];?> </td> <?php
            ?> <td> <?php echo $row['points'];?> </td> <?php
            
            ?> 
                    <?php 
                        session_start();
                         

                    ?>
                    <td class="p-2">
                    
                    <a class="btn btn-danger" href="./delete.php?id=<?php echo $row['id']?>">Delete</a>
                    <?php

                    if($_SESSION['state']==1){

                        ?>
                        <script type="text/javascript">
                            alert("Successful");
                        </script>

                        <?php
                        $_SESSION['state']=0;
                    }

                    ?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="./view.php?id=<?php echo $row['name']?>&&id2=<?php echo $row['id']?>">View</a>
                    </td>
            <?php
            $no++;
            echo '</tr>';
        }
        echo '</table>';

        // Close the database connection
        $db->close();

    ?>

    </div>
       <div class="text-center d-flex mx-auto w-40 " style="width: 500px;">
        <a href="./logout.php" class="btn btn-danger text-center d-flex mx-auto w-25 "><i class="fa fa-sign-out" style="font-size:25px;color:"></i>Log Out</a>
        <a href="./bin.php" class="btn btn-success text-center d-flex mx-auto w-25 "><i class="fa fa-info" style="font-size:25px;color:"></i>  Bin Details</a>
    </div>

    <div style="margin-top: 5px; margin-bottom: 20px;" class="text-center d-flex mx-auto w-25 ">

        <!-- <a href="./bin.php" class="btn btn-info text-center d-flex mx-auto w-25 ">Bin Details</a> -->

       </div>





</body>
</html>