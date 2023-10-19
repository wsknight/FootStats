<?php

include 'connection.php';

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];
$lineOfScrim = $_POST['lineOfScrimmage'];
$lineToGain = $_POST['lineOfScrimmage'] + 10;

//SQL Statement
$sql = "INSERT INTO games (gameNum, team1, team2, ODK)
VALUES ($gameNum, '$teamOne', '$teamTwo', 'K')";

mysqli_query($conn, $sql);

//SQL Statement
$sql2 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain)
VALUES (0, $lineOfScrim, $lineToGain)";

mysqli_query($conn, $sql2);

header("Location: secondform.html?lineToGain=$lineToGain");

//Close Connection
mysqli_close($conn);

?>





