<?php
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>
<body style="background-color: #343a40; font-size: 12px;  ">

	<h1 style="margin-top: 10px; color: white;" class="text-center">Bin<?php echo $id; ?> Details</h1>

	<div class="text-center">
	<a href="./bin.php" class="btn btn-danger">Back</a>
	</div>


	<?php 

// Define the database connection variables
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'mydb';



// Create a new database connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = " SELECT * FROM capa WHERE id = $id ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


$sql = " SELECT * FROM wt WHERE id = $id ";
$result2 = mysqli_query($conn, $sql);

$row2 = mysqli_fetch_assoc($result2);

?>
    
    <div class="row">

	<div class="text-center d-flex mx-auto  " style="margin-top: 50px; background-color: white; margin: 10px; width:500px; ">

       <canvas id="chart" style="height: 380px; " >
           
       </canvas>

       </div>


       <script>
var xValues = ["Glass", "Metal", "Paper", "Plastic", "Trash"];
var yValues = [<?php echo $row['bin1']?>, <?php echo $row['bin2']?>, <?php echo $row['bin3']?>, <?php echo $row['bin4']?>, <?php echo $row['bin5']?>,0,100];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("chart", {
    
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues,
      
    }]
  },
  options: {
    maintainAspectRatio: false,
    legend: {display: false},
    title: {
      display: true,
      text: "Bin Capacity",
      
    }

  }
});
</script>

	<div class="text-center d-flex mx-auto  " style="margin-top: 50px; background-color: white; margin-bottom: 20px; margin: 10px; width: 500px;">


		<table class="table">

			<tr>
                <th>Bin Name</th>
                <th>Weight(kg)</th>
                <th>Used Capacity(%)</th>
                <th>Available Capacity(%)</th>
            </tr>

            <tr>
                <td>Glass</td>
                <td><?php echo $row2['bin1'] ?></td>
                <td><?php echo $row['bin1'] ?></td>
                <td><?php echo 100 - $row['bin1'] ?></td>
            </tr>

            <tr>
                <td>Metal</td>
                <td><?php echo $row2['bin2'] ?></td>
                <td><?php echo $row['bin2'] ?></td>
                <td><?php echo 100 - $row['bin2'] ?></td>
            </tr>

            <tr>
                <td>Paper</td>
                <td><?php echo $row2['bin3'] ?></td>
                <td><?php echo $row['bin3'] ?></td>
                <td><?php echo 100 - $row['bin3'] ?></td>
            </tr>

            <tr>
                <td>Plastic</td>
                <td><?php echo $row2['bin4'] ?></td>
                <td><?php echo $row['bin4'] ?></td>
                <td><?php echo 100 - $row['bin4'] ?></td>
            </tr>

            <tr>
                <td>Trash</td>
                <td><?php echo $row2['bin5'] ?></td>
                <td><?php echo $row['bin5'] ?></td>
                <td><?php echo 100 - $row['bin5'] ?></td>
            </tr>


		</table>


	</div>
</div>

	
</body>
</html>