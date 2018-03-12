<?php
$mysqli = new mysqli("mysql.eecs.ku.edu","q709l816","eegh3eJ7","q709l816");
$username = $_POST["username"];
$content = $_POST["content"];
if($mysqli->connect_errno){
  prinf("Connection error %s\n",$mysqli->connect_error);
  exit();
}
if($username==''||$content ==''){
  printf("Wrong! Username or content cannot not blank!");
}else{
  $user_have = false;
  $query = "SELECT user_id FROM Users;";
  if($result =$mysqli->query($query)){
    while($row = $result->fetch_assoc()){
      if($row["user_id"]==$username){
        $user_have = true;
      }
    }
    if($user_have == true){
      $query2 = "INSERT INTO Posts(content,author_id) VALUES ('$content','$username');";
      if($mysqli->query($query2)){
        printf("Increase successfully!");
      }
    }else{
      printf("Wrong, the user is not exist!");
    }
  }
}
$mysqli->close();
?>
