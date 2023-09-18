<?php

$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";


//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM games"

//SELECT example without *: firstName, lastName, email 
//FROM mytable
//WHERE lastName="Wheeler" AND firstName = "Wayne" <-- This selects every record that has the lastName variable equal wheeler, this is useful for specific condition record manipulation.

$result = mysqli_query($conn, $sql)

if(mysqli_num_rows($result)>0){
echo "<table>
        <tr>
            <th>gameNum</th>
            <th>teamOne</th>
            <th>teamTwo</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr>
              <td>" . $row['gameNum']. "</td>
              <td>" . $row['teamOne']. "</td>
              <td>" . $row['teamTwo']. "</td>
            </tr>
            ";
    }
echo "</table>";
  
}else{
  die;
}

mysqli_close($conn);
?>