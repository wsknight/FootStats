<html>

<head>
  <title>FootStats - Editing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale="1">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="img/sliderIcon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
</head>

<body>
  <h1 class="headstyle">FootStats</h1>
  <h1 class="headstyle">Editing</h1>





</body>
</html>


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

echo "$id"
echo "<form action='editscript.php' method='POST'>";
echo "<table>
            <tr>
              <th><label for='playTypeRun'>Run</label></th>
              <th><input type='radio' id='playTypeRun' name='playType' value='Run' name='playType'></th>
            </tr>
            <tr>
              <th><label for='playTypePass'>Pass</label></th>
              <th><input type='radio' id='playTypePass' name='playType' value='Pass' name='playType'></th>
            </tr>
          </table>";

echo "<table>
            <tr>
              <th><label for='left'>Left</label></th>
              <th><input type='radio' id='left' value='left' name='hash'></th>
            </tr>
            <tr>
              <th><label for='middle'>Middle</label></th>
              <th><input type='radio' id='middle' value='middle' name='hash'></th>
            </tr>
            <tr>
              <th><label for='middle'>Right</label></th>
              <th><input type='radio' id='right' value='right' name='hash'></th>
            </tr>
          </table>";

echo "<table>
            <tr>
              <th><label for='left'>Strong Left</label></th>
              <th><input type='radio' id='left' value='left' name='oStrength'></th>
            </tr>
            <tr>
              <th><label for='middle'>Even Middle</label></th>
              <th><input type='radio' id='middle' value='middle' name='oStrength'></th>
            </tr>
            <tr>
              <th><label for='right'>Strong Right</label></th>
              <th><input type='radio' id='right' value='right' name='oStrength'></th>
            </tr>
          </table>";






echo "<input type='submit' value='Update'>";
echo "</form>";


mysqli_close($conn);

?>

