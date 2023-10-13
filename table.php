<html>
  
<head>  
  <title>FootStats - Table</title>
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
    color: white;
    background-size: cover;
    width: 100px;
    height: 100px;
    cursor: pointer;
    border: none;
    outline: none;
    padding: 0;
    font-size: 20px;
    font-family: 'Graduate', cursive; 
  }

  .delete-btn {
    color: white;
    background-size: cover;
    width: 100px;
    height: 100px;
    cursor: pointer;
    border: none;
    outline: none;
    padding: 0;
    font-size: 20px;
    font-family: 'Graduate', cursive; 
  }
.headstyle{
  border-radius:5px;
  text-align: center;
  background-color:gray;
  box-shadow: -1px 1px 5px #5e5e5e;
  color:white;
  letter-spacing:2px;
  word-spacing: 5px;
  text-shadow: 2px 2px 10px black;
  font-family: 'Graduate', cursive;
  padding-top: 1%;
  padding-bottom: 1%;
}
  
</style>
  
</head>

<body>

<h1 class="headstyle">FootStats</h1>
  
<?php

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];

include 'connection.php';

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
              <td> <button class='delete-btn' data-id='" . $row['playID'] . "'>Delete</button> </td>
              <td> <button class='edit-btn' data-id='" . $row['playID'] . "'>Edit</button> </td>
            </tr>";
    }
echo "</table>";
  
}else{
  die();
}

//Close Connection
mysqli_close($conn);

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
      if(confirm("Are you sure you want to edit this record?")){
        var id = event.target.getAttribute('data-id');
        window.location.href = "editform.php?id="+id;
      }
    
        }
  });
  

  
  
 

  
</script>

</body>
  
</html>