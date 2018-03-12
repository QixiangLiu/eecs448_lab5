<?php
$mysqli = new mysqli("mysql.eecs.ku.edu","q709l816","eegh3eJ7","q709l816");
if($mysqli->connect_errno){
  printf("Connection Error %s/n",$mysqli->connect_error);
  exit();
}
$query = "SELECT * FROM Users;";
if($result = $mysqli->query($query)){
  echo "<table>";
  echo "<th>Display Users</th>";
  while($row= $result->fetch_assoc()){
    echo "<tr>";
      echo "<td>".$row["user_id"]."</td>";
    echo "</tr>";
  }
  echo "</table>";
}



$mysqli->close();






?>
