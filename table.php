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
   echo "<table>
        <tr>
            <th>backfield calls</th>
            <th>hash</th>
            <th>Offensive Play</th>
            <th>Offensive Strength</th>
            <th>Play Direction</th>
            <th>Play Type</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['$backfieldCalls'] . "</td>";
        echo "<td>" . $row['$hash'] . "</td>";
        echo "<td>" . $row['$oPlay'] . "</td>";
        echo "<td>" . $row['$oStrength']. "</td>";
        echo "<td>" . $row['$playDirection']. "</td>";
        echo "<td>" . $row['$playType']. "</td>";
        echo "</tr>";
    }
 echo"</table>";
    
  
}else{
  die();
}

//Close Connection
mysqli_close($conn);

?>
