<?php

include 'connection.php';

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];
$id = $_GET['id'];
$sql="DELETE FROM playInformation WHERE playID='$id'";

$result=mysqli_query($conn,$sql);

if($result)
{
  header("location:table.php");
}
mysqli_close($conn);
?>