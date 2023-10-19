<html>
  
<head>  
  <title>FootStats - Table</title>
  <link rel="icon" type="image/x-icon" href="img/sliderIcon.png">
  <link href="tablestyle.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
  

</head>

<body>

<h1 class="headstyle">FootStats</h1>
  
<?php

include '/connection.php';

$backfieldCalls = $_POST['backfieldCalls'];
$hash = $_POST['hash'];
$oPlay = $_POST['oPlay'];
$oStrength = $_POST['oStrength'];
$playDirection = $_POST['playDirection'];
$playType = $_POST['playType'];

$sql = "INSERT INTO playInformation (playType, hash, backfieldCalls, oPlay, oStrength, playDirection)
VALUES ('$playType' , '$hash' , '$backfieldCalls' , '$oPlay' , '$oStrength' , '$playDirection')";

mysqli_query($conn, $sql)

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
            <th>DELETE</th>
            <th>UPDATE</th>
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
}


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