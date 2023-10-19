<?php

include 'connection.php';

$gameNum = $_POST['gameNum'];
$teamOne = $_POST['teamOne'];
$teamTwo = $_POST['teamTwo'];
$lineOfScrim = $_POST['lineOfScrimmage'];
$lineToGain = $_POST['lineOfScrimmage'] + 10;

//SQL Statement
$sql = "INSERT INTO games (gameNum, team1, team2, ODK)
VALUES ($gameNum, '$teamOne', '$teamTwo', 'K')";

mysqli_query($conn, $sql);

//SQL Statement
$sql2 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain, down)
VALUES (0, $lineOfScrim, $lineToGain, 1)";

mysqli_query($conn, $sql2);

header("Location: secondform.html?lineToGain=$lineToGain");

//Close Connection
mysqli_close($conn);

?>





