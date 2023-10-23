<?php

include 'connection.php';
include 'varstorage.php';

//SQL Statement
$sql = "INSERT INTO games (gameNum, team1, team2, ODK)
VALUES ($gameNum, '$teamOne', '$teamTwo', 'K')";

mysqli_query($conn, $sql);

//SQL Statement
$sql2 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain, down)
VALUES (0, $lineOfScrim, $lineToGain, 1)";

mysqli_query($conn, $sql2);

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];

$sql3 = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES ('$playType' , '$hash' , '$backfieldCalls' , '$oPlay' , '$oStrength' , '$playDirection')";

$insert = mysqli_query($conn, $sql3);

$lineToGain = $_POST['lineToGain'];
$gainOrLoss = $_POST['yardline'];

$sql4 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain, down)
VALUES ($gainOrLoss, 0, $lineToGain, 1)";

$insert2 = mysqli_query($conn, $sql4);

header("Location: /table.php");

mysqli_close($conn);

?>