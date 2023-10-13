<?php

$id = $_POST['playID'];
$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];

include 'connection.php';

$update = "UPDATE playInformation SET backfieldCalls ='$backfieldCalls', hash = '$hash', oPlay = '$oPlay', oStrength = '$oStrength', playDirection = '$playDirection', playType='$playType' WHERE playID = '$id'";

$query = mysqli_query($conn, $update);

header("Location: table.php");

mysqli_close($conn);


?>