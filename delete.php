<html>
  
<head>  
  
<style type="text/css">
th, td {
  border: 1px solid;
}
table{
  width: 100%;
  border-collapse: collapse;
}
  
</style>
  
</head>

<body>

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
$sql="DELETE FROM playInformation WHERE playID='$id'";
$result=mysqli_query($conn,$sql);

if($result)
{
  header("location:table.php");
}
?>
  
</body>

  
  
</html>