<?php

include 'connection.php';

$gameNum = $_POST['gameNum'];
$teamOne = $_POST['teamOne'];
$teamTwo = $_POST['teamTwo'];
$lineOfScrim = $_POST['lineOfScrimmage'];
$lineToGain = 0;

if($lineOfScrim == 50){
  $lineOfScrim = 20; 
}
if($lineOfScrim == -50){
  $lineOfScrim = -20; 
}
if($lineOfScrim > 0){
  $lineToGain = $lineOfScrim - 10;
}else if($lineOfScrim == 0){
  $lineToGain = 10;
}else{
  $lineToGain = $lineOfScrim + 10;
}


//SQL Statement
$sql = "INSERT INTO games (gameNum, team1, team2, ODK)
VALUES ($gameNum, '$teamOne', '$teamTwo', 'K')";

$firstinsert = mysqli_query($conn, $sql);

//SQL Statement
$sql2 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain, down)
VALUES (0, $lineOfScrim, $lineToGain, 1)";

$secondinsert = mysqli_query($conn, $sql2);

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];

$sql3 = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES ('$playType' , '$hash' , '$backfieldCalls' , '$oPlay' , '$oStrength' , '$playDirection')";

$thirdinsert = mysqli_query($conn, $sql3);

$gainOrLoss = $_POST['yardline'];

$sql4 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain, down)
VALUES ($gainOrLoss, 0, $lineToGain, 1)";

$fourthinsert2 = mysqli_query($conn, $sql4);

header("Location: /table.php");

mysqli_close($conn);

?>