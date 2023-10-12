<?php

$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";
$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];


//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['id'];

$update = "UPDATE playInformation SET backfieldCalls = '$backfieldCalls', hash = '$hash', oPlay = '$oPlay', oStrength = '$oStrength', playDirection = '$playDirection', playType = '$playType' WHERE playID = '$id'";

//$query = mysqli_query($conn, $update);


if(mysqli_query($conn, $update)) {
  echo "New Record Created";
  echo $update;
 // header("Location: table.php");
}else{
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);


?>