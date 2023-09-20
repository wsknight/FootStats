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

//check connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_error() );
}
//SQL Statement
$sql = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES('$playType', '$hash', '$backfieldCalls', '$oPlay', '$oStrength', '$playDirection')";

//SQL Query
if(mysqli_query($conn, $sql)) {
  echo "New Record Created";
}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Close Connection
mysqli_close($conn);

?>