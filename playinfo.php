<?php

include 'connection.php';

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];

$sql = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES ('$playType' , '$hash' , '$backfieldCalls' , '$oPlay' , '$oStrength' , '$playDirection')";

$insert = mysqli_query($conn, $sql);

$lineToGain = $_POST['lineToGain'];
$gainOrLoss = $_POST['yardline'];

$sql2 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain, down)
VALUES ($gainOrLoss, 0, $lineToGain, 1)";

$insert2 = mysqli_query($conn, $sql2);

header("Location: /table.php");

mysqli_close($conn);

?>