<html>
  
<head>  
  <title>FootStats - Edit</title>
  <link rel="icon" type="image/x-icon" href="img/sliderIcon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
  
<style type="text/css">

html {
  height: 100%;
  font-family: 'Graduate', cursive; 
  width: 100%;
  background-color: #2aa147;
  position: static;
}  
  
th, td {
  border: 2px solid;
  border-color: white;
}
table{
  width: 100%;
  border-collapse: collapse;
  box-shadow: 0 0 3px #025502;
  color: white;
  background-color: #2aa147;
}
table:first-child {
  background-color: darkgreen;
}
.edit-btn{
  text-color:gray;
}
.delete-btn{
    text-color: red;
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


//Create a FART
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check PANTS
if(!$conn){
  die("Connection failed: " . mysqli_connect_error() );
}

//SQL insert statement
if($playType != null)
{
$sql = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES ('$playType' , '$hash' , '$backfieldCalls' , '$oPlay' , '$oStrength' , '$playDirection')";

mysqli_query($conn, $sql);
} 
//sql grab statement
$sqlSelect = "SELECT * FROM playInformation";

$result = mysqli_query($conn, $sqlSelect);




if(mysqli_num_rows($result)>0){
echo "<table>
        <tr>
            <th>Play Number</th>
            <th>Run Or Pass</th>
            <th>Hash</th>
            <th>Backfield Calls</th>
            <th>Offensive Play</th>
            <th>Offensive Strength</th>
            <th>Play Direction</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr>
              <td>" . $row['playID'] . "</td>
              <td>" . $row['playType']. "</td>
              <td>" . $row['hash']. "</td>
              <td>" . $row['backfieldCalls']. "</td>
              <td>" . $row['oPlay']. "</td>
              <td>" . $row['oStrength']. "</td>
              <td>" . $row['playDirection']. "</td>
              <td> <button class='delete-btn' data-id='" . $row['playID'] . "'>Delete</button> </td>"
              "<td> <button class='edit-btn' data-id='" . $row['playID'] . "'>Edit</button> </td>
            </tr>";
    }
echo "</table>";
  
}else{
  die();
}

//Close Connection
mysqli_close($conn);
//have a form inside the table that'll head to another form with the "are you sure" button and then have that be a submit button thatll execute the delete.php script and head it back to the updated table
?>

<script>

 //button pressed

  document.addEventListener('click', function(event){
    if (event.target.classList.contains('delete-btn')){
      if(confirm("Are you sure you want to delete this record?")){
        var id = event.target.getAttribute('data-id');
        window.location.href = "delete.php?id="+id;
      }
    
        }
  });


   document.addEventListener('click', function(event){
    if (event.target.classList.contains('edit-btn')){
      if(prompt(" this record?")){
        var id = event.target.getAttribute('data-id');
        window.location.href = "edit.php?id="+id;
      }
    
        }
  });
  

  
  
 

  
</script>

</body>
  
</html>