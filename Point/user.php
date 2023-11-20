<?php 
    ini_set('display_errors', 'Off');

    session_start();

    if(!isset($_SESSION['user_login']))
        header("Location:./login.php");
    
    session_start();
    $name = $_SESSION['name'] ;
    $point = $_SESSION['point'] ;

    $conn = mysqli_connect('localhost', 'root', '', 'mydb');

    $sql = " SELECT * FROM points WHERE name = '$name' ORDER BY id desc limit 50 ";

    $result = mysqli_query($conn,$sql);

    $sql2 = " SELECT * FROM user WHERE name = '$name' ";

    $result2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result2);

    $point = $row['points'];
    $num = $row['num'];



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
    <title>User Information</title>
</head>
<body style=" background-image:url('img2.jpg'); background-size: 100%100%; background-attachment: fixed; background-color: rgba(255, 255, 255, 0.5); background-blend-mode: lighten; " >

    <div class="row">

        <div class="col-md-6">


            

                    <div class="m-4 ">
        
        <div style="background: #008cca; color: white; width: 100%; height: 335px; " class="container m-3 p-4 w- d-flex mx-auto flex-column border border-2 text-center">

            <div class="row">

                <div class="col-md-8">

            <h2 style="color: white;" class="text-center">User Point Status</h2> <br>

        <h4>Name : <?php echo $name ?> </h4>
        <h4>Point : <?php echo $point ?>  </h4> <br>
                        

        <br>
        <a href="./logout.php" class="btn btn-warning mx-auto"><i class="fa fa-sign-out" style="font-size:25px;color:"></i>Log Out
        </a>

        </div>
       

                <div class="col-md-4">

                    <h2 style="color: white;" class="text-center">QR Code</h2> <br>

            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $num ?>&choe=UTF-8" style="margin-left: auto; margin-right: auto; width: 150px;"> <br> <br>
        <a href="download.php?num=<?php echo $num ?>" download>
            <button onclick="down()" class="btn btn-info"> Download </button> </a>

            
                        <script type="text/javascript">
                            function down(){
                            alert("Downloading.......");
                        }
                        </script>

                    </div>

                </div>

                
            </div>
        </div>

            


   <div class="m-4 " >
        
        <div style="background: #02ce6f;" class="container m-3 p-4 w-7 d-flex mx-auto flex-column border border-2 text-center">
            <h2 class="text-center ">Mobile Recharge (100 Points = 10 Taka)</h2> <br>

            <?php

            if(isset($_POST['btn'])){

                $amount = $_POST['point'];
                $num = $_POST['num'];
                $len = strlen($num);
                $sim = $_POST['sim'];

                if($amount > $point){

                    
                    ?>
                        <script type="text/javascript">
                            alert("Insufficient Points");
                        </script>
                        <?php
                }

                else if($amount<100){

                    
                    ?>
                        <script type="text/javascript">
                            alert("Minimun Points 100");
                        </script>
                        <?php
                }

                else if($len!=11){
                    ?>
                        <script type="text/javascript">
                            alert("Invalid Number");
                        </script>
                        <?php
                }

                else{
                    echo $_POST['sim'];
                    $f=0;
                    for($i=0;$i<$len;$i++){

                        if($num[$i]<'0' ||  $num[$i]>'9') $f=1;
                        else if($sim=='7'){
                            if($num[2]!='7' && $num[2]!='3') $f=1;
                        }
                        else if($sim=='9'){
                            if($num[2]!='9' && $num[2]!='4') $f=1;
                        }
                        else if($sim!=$num[2]) $f=1;
                    }

                    if($f==1){
                        ?>
                        <script type="text/javascript">
                            alert("Invalid Number");
                        </script>
                        <?php
                    }


                    else{



                    $dat = date('d-m-y');

                    $sql = "INSERT INTO points (name,points,cat,dat) values('$name', -$amount, 'Mobile Recharge', '$dat') ";

                    $result2 = mysqli_query($conn, $sql);

                    $point = $point - $amount;

                    $sql = "UPDATE user SET points = $point where name = '$name'";

                    $result2 = mysqli_query($conn, $sql);

            ?>
            <script type="text/javascript">
                alert("Recharge Successful");
            </script>
            <?php

                    header("refresh:1");
                }

            }

            }
        ?>
        
        <form action="" method="POST">

            <select name="sim">
                <option value="7">GP Sim</option>
                <option value="8">Robi Sim</option>
                <option value="6">Airtel Sim</option>
                <option value="9">Banglalink Sim</option>
                <option value="5">Teletalk Sim</option>
            </select>
            <input type="text" name="num" placeholder="Enter a Number" required>
            <input type="Number" name="point" placeholder="Enter Points" required>

            <br><br>
            <button class="btn btn-info" type="submit" name="btn">Recharge</button>
            
        </form>

        </div>
       
   </div>

   <div class="m-4 p-">
        
        <div style="background: #ff9d06;" class="container m-3 p-4 w-7 d-flex mx-auto flex-column border border-2 text-center">
            <h2 class="text-center ">Get Promo Code (100 Points = 10 Taka)</h2> <br>

            <?php

            if(isset($_POST['btn2'])){

                $amount = $_POST['point2'];

                if($amount > $point){

                    
                    ?>
                        <script type="text/javascript">
                            alert("Insufficient Points");
                        </script>
                        <?php
                }

                else if($amount<100){

                    ?>
                        <script type="text/javascript">
                            alert("Minimun Points 100");
                        </script>
                        <?php
                }

                else{
                    $dat = date('d-m-y');
                    $shop = $_POST['shop'];



                    $sql = "INSERT INTO points (name,points,cat,dat) values('$name', -$amount, 'Promo Code', '$dat') ";

                    $result2 = mysqli_query($conn, $sql);

                    $point = $point - $amount;

                    $sql = "UPDATE user SET points = $point where name = '$name'";

                    $result2 = mysqli_query($conn, $sql);


                    $promo = rand(10000,99999);

                    $amnt = ($amount/10);

                    $sql = "INSERT INTO promo (name,promo,amnt,shop) values('$name', $promo, $amnt , '$shop') ";

                    $result4 = mysqli_query($conn, $sql);


                    ?>
                        <script type="text/javascript">
                            alert("Successful");
                        </script>
                        <?php

                    header("refresh:1");
                }

            }
        ?>
        
        <form action="" method="POST">

            <select name="shop">
                <option value="Daraz">Daraz</option>
                <option value="Food Panda">Food Panda</option>
                <option value="Amazon">Amazon</option>
                <option value="Ali Express">Ali Express</option>
            </select>

            <input type="Number" name="point2" placeholder="Enter Points" required>

            <button class="btn btn-info" type="submit" name="btn2">Promo Code</button>
            
        </form>

        <table class="table">

                <tr>
                <th>No.</th>
                <th>Promo Code</th>
                <th>Amount(Taka)</th>
                <th>Shop</th>
                </tr>

                <?php

                $sql = " SELECT * FROM promo WHERE name = '$name' ORDER BY id desc ";

                $result3 = mysqli_query($conn,$sql);


                $id2 =1;

                while($row = mysqli_fetch_assoc($result3)){ ?>

                    <tr>

                        <td> <?php echo $id2 ?></td>
                        <td> <?php echo $row['promo']?> </td>
                        <td> <?php echo $row['amnt']?> </td>
                        <td> <?php echo $row['shop']?> </td>

                    </tr>

                <?php $id2++; }
                ?>

                
            </table>

        </div>
       
   </div>



        </div> 

        <div class="col-md-6">


            <div class="m-4 p-">
        
        <div style="background: #d9dbe5;" class="container m-3 p-4 w-7 d-flex mx-auto flex-column border border-2 text-center">
            <h2 class="text-center ">User Point History</h2> <br>
        
            <table class="table">

                <tr>
                <th>No.</th>
                <th>Increment/Decrement</th>
                <th>Category</th>
                <th>Date</th>
                </tr>

                <?php

                $id =1;

                while($row = mysqli_fetch_assoc($result)){ ?>

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