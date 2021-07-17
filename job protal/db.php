<?php 
 
$localhost = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "job"; 
 
// create connection 
$con = mysqli_connect($localhost, $username, $password); 
 mysqli_select_db($con,'job'); 
?>