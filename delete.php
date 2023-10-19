<?php

include 'connection.php';

$id = $_GET['id'];
$sql="DELETE FROM playInformation WHERE playID='$id'";

$result=mysqli_query($conn,$sql);

if($result)
{
  header("location:table.php");
}
mysqli_close($conn);
?>