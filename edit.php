<?php

$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";
$backfieldCalls = $_POST['backfieldCallsEdited'];
$hash = $_POST['hashEdited'];
$oPlay = $_POST['oPlayEdited'];
$oStrength = $_POST['oStrengthEdited'];
$playDirection = $_POST['playDirectionEdited'];
$playType = $_POST['playTypeEdited'];


//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['id'];

$update = "UPDATE playInformation SET backfieldCalls = '$backfieldCalls', hash = '$hash', oPlay = '$oPlay', oStrength = '$oStrength', playDirection = '$playDirection', playType = '$playType' WHERE playID = '$id'";

$query = mysqli_query($conn , $update);


//Error 
if($query == true) {
  echo "New Record Created";
  header("Location: table.php");
}else{
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
  echo $update;
}


mysqli_close($conn);


?>