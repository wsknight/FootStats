<!DOCTYPE html>
<html>

<head>
  <title>FootStats</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale="1">
  <link href="secondformstyle.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="img/sliderIcon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">


</head>

<body>
  <h1 class="headstyle">FootStats</h1>

  <form action="/table.php" method="post">
    <div class="entireDisplay">
      <div class="topContainerSecondForm" style="order:1;">

        <!-- playType-->
        <div class="containerRadio">
          <p>Was the play a Run or Pass?:</p>
          <table>
            <tr>
              <th><label for="playTypeRun">Run</label></th>
              <th><input type="radio" id="playTypeRun" class="inputTextStyle" name="playType" value="Run" name="playType"></th>
            </tr>
            <tr>
              <th><label for="playTypePass">Pass</label></th>
              <th><input type="radio" id="playTypePass" class="inputTextStyle" name="playType" value="Pass" name="playType"></th>
            </tr>
          </table>
        </div>
        <!-- hash-->
        <div class="containerRadio">
          <p>Where was the hash?: </p>
          <table>
            <tr>
              <th><label for="left">Left</label></th>
              <th><input type="radio" id="left" value="left" name="hash"></th>
            </tr>
            <tr>
              <th><label for="middle">Middle</label></th>
              <th><input type="radio" id="middle" value="middle" name="hash"></th>
            </tr>
            <tr>
              <th><label for="middle">Right</label></th>
              <th><input type="radio" id="right" value="right" name="hash"></th>
            </tr>
          </table>
        </div>
        <br>
        <div class="containerRadio">
          <p>Where was the offensive strength?: </p>
          <table>
            <tr>
              <th><label for="left">Strong Left</label></th>
              <th><input type="radio" id="left" value="left" name="oStrength"></th>
            </tr>
            <tr>
              <th><label for="middle">Even Middle</label></th>
              <th><input type="radio" id="middle" value="middle" name="oStrength"></th>
            </tr>
            <tr>
              <th><label for="right">Strong Right</label></th>
              <th><input type="radio" id="right" value="right" name="oStrength"></th>
            </tr>
          </table>
        </div>
        <div class="containerRadio">
          <p>What direction was the play in?: </p>
          <table>
            <tr>
              <th><label for="left">Left</label></th>
              <th><input type="radio" id="left" value="left" name="playDirection"></th>
            </tr>
            <tr>
              <th><label for="middle">Middle</label></th>
              <th><input type="radio" id="middle" value="middle" name="playDirection"></th>
            </tr>
            <tr>
              <th><label for="right">Right</label></th>
              <th><input type="radio" id="right" value="right" name="playDirection"></th>
            </tr>
          </table>
        </div>
        <div class="containerText">
          <!--backfield calls-->
          <label for="backfieldCalls">What was the backfield call? :</label>
          <input id="backfieldCalls" class="inputTextStyle" placeholder="What was the backfield call?"
            name="backfieldCalls">
          <label for="backfieldCalls"></label>
        </div>
        <div class="containerText">
          <!--offensive play-->
          <label for="oPlay">What was the offensive play? :</label>
          <input id="oPlay" class="inputTextStyle" placeholder="What was the offensive play?" name="oPlay">
          <label for="oPlay"></label>
        </div>
      </div>

      <div class="bottomContainer" style="order:2">

        <div class="containerItem">
          <input type="submit" value="Confirm Edit" class="inputTextStyle">

        </div>
      </div>


    </div>


    </div>



  </form>





  <script src="script.js"></script>
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

$conn = mysqli_connect($servername, $username, $password, $dbname);


$id = $_GET['id'];
$sql="UPDATE playInformation WHERE playID='$id'";

$result=mysqli_query($conn,$sql);

if($result)
{
  header("location:table.php");
}
?>