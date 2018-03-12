<?php
  echo "<html><body><table>";
  $select = $_POST["select"];
  $mysqli = new mysqli("mysql.eecs.ku.edu","q709l816","eegh3eJ7","q709l816");
  if($mysqli->connect_errno){
    printf("Connection Failed! %s\n",$mysqli->connect_error);
    exit();
  }

    $query = "SELECT content FROM Posts WHERE author_id = '$select'";
    if($result=$mysqli->query($query)){
      while($row=$result->fetch_assoc()){
          echo "<tr><td>".$row["content"]."</td></tr>";
      }
    }else{
      echo "<tr><td>Nothing to post</td></tr>";
    }
    $mysqli->close();
    echo "</table></body></html>";

?>
