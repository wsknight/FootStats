<?php>

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

//Seeing if it has received an id.
if (isset($_GET['id']))
  //{
 // echo $_GET['id'];
  //$id=_GET['id'];
  //echo "<div>
   //     <p>Are you sure you want to delete : '$id'?<p>
     //   <div>
  //"
 // $delete=mysqli_query($conn,"DELETE FROM 'playInformation' WHERE 'playID'='$id'");
 // header("location:table.php");
 // die();
//  }


//SQL insert statement
$sql = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES ('$playType' , '$hash' , '$backfieldCalls' , '$oPlay' , '$oStrength' , '$playDirection')";

mysqli_query($conn, $sql);

//sql grab statement
$sqlSelect = "SELECT * FROM playInformation";

$result = mysqli_query($conn, $sqlSelect);




 while($row = mysqli_fetch_assoc($result($_GET['id']))){
      echo "<tr>
              <td>" . $row['playID'] . "</td>
              <td>" . $row['playType']. "</td>
              <td>" . $row['hash']. "</td>
              <td>" . $row['backfieldCalls']. "</td>
              <td>" . $row['oPlay']. "</td>
              <td>" . $row['oStrength']. "</td>
              <td>" . $row['playDirection']. "</td>
              <td> <a href='delete.php?id=".$row['playID']."' class='button'>Delete<a> <td>
            </tr>
            ";


?>