<?php 

$conn = mysqli_connect('localhost','root','',);

$sql= "CREATE DATABASE blog";

$result = mysqli_query($conn,$sql);

$conn = mysqli_connect('localhost','root','','blog');
$sql= "CREATE TABLE ";

//unlink('table.php');

?>