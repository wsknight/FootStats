<?php

$servername = "localhost";
$username = "root";
$password = "foot";
$dbname = "footballApp";
$backfieldCalls = $_POST['backfieldCallsEdited'];
$hash = $_POST['hashEdited'];
$oPlay = $_POST['oPlayEdited'];
$oStrength = $_POST['oStrengthEdited'];
$playDirection = $_POST['playDirectionEdited'];
$playType = $_POST['playTypeEdited'];


//Create a Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['id'];

$query1 = "UPDATE playInformation SET backfieldCalls = '$backfieldCalls' WHERE playID = '$id'";

$result1 = mysqli_query($conn,$query1);

$query2 = "UPDATE playInformation SET hash = '$hash' WHERE playInformation . playID = '$id'";

$result2 = mysqli_query($conn,$query2);

$query3 = "UPDATE playInformation SET oPlay = '$oPlay' WHERE playInformation . playID = '$id'";

$result3 = mysqli_query($conn,$query3);

$query4 = "UPDATE playInformation SET oStrength = '$oStrength' WHERE playInformation . playID = '$id'";

$result4 = mysqli_query($conn,$query4);

$query5 = "UPDATE playInformation SET playDirection = '$playDirection' WHERE playInformation . playID = '$id'";

$result5 = mysqli_query($conn,$query5);

$query6 = "UPDATE playInformation SET playType = '$playType' WHERE playInformation . playID = '$id'";

$result6 = mysqli_query($conn,$query6);

header("location:table.php");

mysqli_close($conn);

?>