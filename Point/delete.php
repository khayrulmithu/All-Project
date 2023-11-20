<?php 
    ini_set('display_errors', 'Off');

    session_start();

    if(!isset($_SESSION['login']))
        header("Location:./admin_login.php");
?> 
<?php 
session_start();

// Define the database connection variables
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'mydb';

// Create a new database connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$id = $_GET["id"];

// Check if the connection was successful
if ($conn) {

            // Prepare the SQL statement
        $sql = "DELETE FROM user WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['state']=1;
           header("Location: ./admin.php");
        } else {
            echo "Error deleting row: " . mysqli_error($conn);
        }
        

   
} else {

    // The connection was not successful
    echo "Error connecting to database: " . mysqli_connect_error();

}


mysqli_stmt_close($stmt);
mysqli_close($conn);
include("./admin.php");

?>


