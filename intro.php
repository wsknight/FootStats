<?php
$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";
$gameNum = $_POST['gameNum'];
$teamOne = $_POST['teamOne'];
$teamTwo = $_POST['teamTwo'];


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
}

$sql2 = "SELECT * FROM games"

//SELECT example without *: firstName, lastName, email 
//FROM mytable
//WHERE lastName="Wheeler" AND firstName = "Wayne" <-- This selects every record that has the lastName variable equal wheeler, this is useful for specific condition record manipulation.

$result = mysqli_query($conn, $sql2);

if(mysqli_num_rows($result)>0){
echo "<table>
        <tr>
            <th>gameNum</th>
            <th>teamOne</th>
            <th>teamTwo</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr>
              <td>" . $row['$gameNum']. "</td>
              <td>" . $row['$teamOne']. "</td>
              <td>" . $row['$teamTwo']. "</td>
            </tr>
            ";
    }
echo "</table>";
  
}else{
  die;
}

//Close Connection
mysqli_close($conn);

?>





