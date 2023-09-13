<?php
$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";

//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
  die("Connection failed: " .mysqli_connect_error() );
}
//SQL Statement
$sql = "INSERT INTO games (gameNum, team1, team2, ODK)
VALUES (gameNum, 'teamOne', 'teamTwo', 'ODK')";

$sql = "INSERT INTO fieldInformation (lineOfScrimmage)
VALUES ('lineOfScrim')";

//SQL Query
if(mysqli_query($conn, $sql)) {
  echo "New Record Created";
}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//Close Connection
mysqli_close($conn);
  
?>





