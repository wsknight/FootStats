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
$id = $_POST['playID']


//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$update = "UPDATE playInformation SET backfieldCalls ='$backfieldCalls', hash = '$hash', oPlay = '$oPlay', oStrength = '$oStrength', playDirection = '$playDirection', playType='$playType' WHERE playID = '$id'";

$query = mysqli_query($conn, $update);

echo $update;


mysqli_close($conn);


?>