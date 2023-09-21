<?php
$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";
$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];



//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
  die("Connection failed: " . mysqli_connect_error() );
}
//SQL Statement
$sql = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES('$playType', '$hash', '$backfieldCalls', '$oPlay', '$oStrength', '$playDirection')";


$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      echo "
          <table>
              <tr>
              <td>" $row['$backfieldCalls'] . "</td>
              <td>" . $row['$hash'] . "</td>
              <td>" . $row['$oPlay'] . "</td>
              <td>" . $row['$oStrength']. "</td>
              <td>" . $row['$playDirection']. "</td>
              <td>" . $row['$playType']. "</td>
            </tr>
            </table>";
    }
  
}else{
  die();
}

//Close Connection
mysqli_close($conn);

?>