<?php
$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";
$gameNum = $_POST['gameNum'];
$teamOne = $_POST['teamOne'];
$teamTwo = $_POST['teamTwo'];
$lineOfScrim = $_POST['lineOfScrimmage'];
$lineToGain = $_POST['lineOfScrimmage'] + 20;

//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_error() );
}
//SQL Statement
$sql = "INSERT INTO games (gameNum, team1, team2, ODK)
VALUES ($gameNum, '$teamOne', '$teamTwo', 'K')";

//SQL Query
if(mysqli_query($conn, $sql)) {
  echo "New Record Created";
}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
};

//SQL Statement
$sql2 = "INSERT INTO fieldInformation (gainOrLoss, lineOfScrim, lineToGain)
VALUES (0, $lineOfScrim, $lineToGain)";

  
//SQL Query
if(mysqli_query($conn, $sql2)) {
  echo "New Record Created";
}else{
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

header("Location: secondform.html");

//Close Connection
mysqli_close($conn);

?>





