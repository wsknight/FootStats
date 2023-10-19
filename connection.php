<?php 
$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";

//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Die on Connection fail
if(!$conn){
  die("Connection failed: " . mysqli_connect_error() );
}
  
?>