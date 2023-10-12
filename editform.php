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

$id = $_GET['id'];

$query = "SELECT * FROM playInformation WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

echo "<form action='editscript.php' method='POST'>";
echo "<table>
            <tr>
              <th><label for='playTypeRun'>Run</label></th>
              <th><input type='radio' id='playTypeRun' name='playType' value='" . $row['playType'] . "' name='playType'></th>
            </tr>
            <tr>
              <th><label for='playTypePass'>Pass</label></th>
              <th><input type='radio' id='playTypePass' name='playType' value='" . $row['playtype'] . "' name='playType'></th>
            </tr>
          </table>";


mysqli_close($conn);

?>

