<?php

include 'connection.php';

//FOR PLAYINFORMATION TABLE

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];



$sqlPlayInfo = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES ('$playType' , '$hash' , '$backfieldCalls' , '$oPlay' , '$oStrength' , '$playDirection')";
  
mysqli_query($conn, $sqlPlayInfo);
  

//FOR FIELDINFORMATION TABLE

header("Location: table.php");

mysqli_close($conn);
?>