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

header("Location: secondform.html");

//Close Connection
mysqli_close($conn);

?>





